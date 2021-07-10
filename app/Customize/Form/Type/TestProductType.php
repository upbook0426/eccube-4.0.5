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

use Customize\Repository\TestProductRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestProductType extends AbstractType
{
    /**
     * @var TestProductRepository
     */
    protected $testProductRepository;

    /**
     * TestProductNameType constructor.
     *
     * @param TestProductRepository $testProductRepository
     */
    public function __construct(
        TestProductRepository $testProductRepository
    ) {
        $this->testProductRepository = $testProductRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $testProducts = $this->testProductRepository->FindAll();
        $choices = [];
        foreach ($testProducts as $testProduct) {
            $id = $testProduct->getId();
            $name = $testProduct->getName();
            $choices[$name] = $id;
        }

        $builder->add('id', ChoiceType::class, [
            'choices' => ['common.select' => '__unselected']+ $choices,
        ]);

        $builder->add('production_area', TextType::class,[
            'required' => false,
        ]);

        $builder->add('submit', SubmitType::class, [
            'label' => '表示する',
        ]);

        // $builder->add('name', ChoiceType::class, [
        //     'choices' => $choices,
        // ]);

        // $builder->add('submit', SubmitType::class, [
        //     'label' => '表示する',
        // ]);
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
        return 'test_product_form';
    }

}
