<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/26/21
 * Time: 7:24 PM
 */

namespace App\Entity;
use App\Application\Sonata\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Nelmio\ApiDocBundle\Annotation\Model;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class Company
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CompanySubRepository")
 * @ORM\Table(name="company_sub")
 */
class CompanySub
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sonata\UserBundle\Entity\User", inversedBy="companySub")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $user;

    /**
     * @return string
     */
    public function __toString()
    {
        return ($this->name) ? $this->name : '';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}