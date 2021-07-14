<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

use Customize\Repository\TestNewsRepository;

class TestUpdateType extends AbstractType
{
    /**
     * @var TestNewsRepository
     */
    protected $testNewsRepository;

    /**
     * TestUpdateType constructor.
     *
     * @param TestNewsRepository $testNewsRepository
     */
    public function __construct(
        TestNewsRepository $testNewsRepository
    ) {
        $this->testNewsRepository = $testNewsRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $testNews = $this->testNewsRepository->FindAll();
        $choices = [];
        foreach ($testNews as $testNews) {
            $id = $testNews->getId();
            $name = $id.':'.$testNews->getTitle();
            $choices[$name] = $id;
        }

        $builder->add('id', ChoiceType::class, [
          'choices' => ['common.select' => '__unselected'] + $choices,
          'data' => '__unselceted',
          'empty_data' => '__unselected',
        ]);

        $builder->add('title', TextType::class, [
          'constraints' => [
            new Assert\NotBlank(),#空の状態だとエラーを返す処理
          ],
        ]);


        $builder->add('submit', SubmitType::class, [
            'label' => '更新',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'test_new';
    }
}
