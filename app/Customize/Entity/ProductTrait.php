<?php
namespace Customize\Entity;

#DBにアクセスするためのライブラリなどを読み込み
use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

#拡張をする対象エンティティの指定
/**
* @Eccube\EntityExtension("Eccube\Entity\Product")
*/

trait ProductTrait //ファイル名と合わせる
{
    /**
    * @var string
    * @ORM\Column(name="production_area", type="string", length=255,nullable=true)
    *
    */
    private $production_area = null;

    /**
     * Set production_area.
     *
     * @param string $production_area|null
     *
     * @return Product
     */
    public function setProductionArea($production_area = null)
    {
        $this->production_area = $production_area;

        return $this;
    }

    /**
     * Get production_area.
     *
     * @return string
     */
    public function getProdutionArea()
    {
        return $this->production_area;
    }
}
