<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;

/**
 * Class AdType
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 * @ORM\Table(name="test")
 */
class Test
{
    /**
     * @ORM\Id()
     * @SWG\Property(description="The unique identifier of the user.")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="title", length=50)
     */
    protected $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
    
}