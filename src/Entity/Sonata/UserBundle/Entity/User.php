<?php

namespace App\Entity\Sonata\UserBundle\Entity;

use App\Entity\CompanySub;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="fos_user_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanySub", mappedBy="user", cascade={"persist"})
     */
    protected $companySub;


    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->companySub = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|CompanySub[]
     */
    public function getCompanySub(): Collection
    {
        return $this->companySub;
    }

    public function addCompanySub(CompanySub $companySub): self
    {
        if (!$this->companySub->contains($companySub)) {
            $this->companySub[] = $companySub;
            $companySub->setUser($this);
        }

        return $this;
    }

    public function removeCompanySub(CompanySub $companySub): self
    {
        if ($this->companySub->removeElement($companySub)) {
            // set the owning side to null (unless already changed)
            if ($companySub->getUser() === $this) {
                $companySub->setUser(null);
            }
        }

        return $this;
    }





}
