<?php

namespace VegeWildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SugarRecipe
 *
 * @ORM\Table(name="sugar_recipe")
 * @ORM\Entity(repositoryClass="VegeWildBundle\Repository\SugarRecipeRepository")
 */
class SugarRecipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredients", type="text")
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="text_recipe", type="text")
     */
    private $textRecipe;

    /**
     * @var string
     *
     * @ORM\Column(name="baking_time", type="string", length=255)
     */
    private $bakingTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cook_time", type="string", length=255)
     */
    private $cookTime;

    /**
     * @var string
     *
     * @ORM\Column(name="total_time", type="string", length=255)
     */
    private $totalTime;

    /**
     * @var int
     *
     * @ORM\Column(name="number_people", type="integer")
     */
    private $numberPeople;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SugarRecipe
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return SugarRecipe
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set textRecipe
     *
     * @param string $textRecipe
     *
     * @return SugarRecipe
     */
    public function setTextRecipe($textRecipe)
    {
        $this->textRecipe = $textRecipe;

        return $this;
    }

    /**
     * Get textRecipe
     *
     * @return string
     */
    public function getTextRecipe()
    {
        return $this->textRecipe;
    }

    /**
     * Set bakingTime
     *
     * @param string $bakingTime
     *
     * @return SugarRecipe
     */
    public function setBakingTime($bakingTime)
    {
        $this->bakingTime = $bakingTime;

        return $this;
    }

    /**
     * Get bakingTime
     *
     * @return string
     */
    public function getBakingTime()
    {
        return $this->bakingTime;
    }

    /**
     * Set cookTime
     *
     * @param string $cookTime
     *
     * @return SugarRecipe
     */
    public function setCookTime($cookTime)
    {
        $this->cookTime = $cookTime;

        return $this;
    }

    /**
     * Get cookTime
     *
     * @return string
     */
    public function getCookTime()
    {
        return $this->cookTime;
    }

    /**
     * Set totalTime
     *
     * @param string $totalTime
     *
     * @return SugarRecipe
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * Get totalTime
     *
     * @return string
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * Set numberPeople
     *
     * @param integer $numberPeople
     *
     * @return SugarRecipe
     */
    public function setNumberPeople($numberPeople)
    {
        $this->numberPeople = $numberPeople;

        return $this;
    }

    /**
     * Get numberPeople
     *
     * @return integer
     */
    public function getNumberPeople()
    {
        return $this->numberPeople;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return SugarRecipe
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
