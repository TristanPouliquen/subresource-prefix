<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ApiResource(routePrefix="/test")
 */
class Answer
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column
     */
    public $content;

    /**
     * @ORM\OneToOne(targetEntity="Question", mappedBy="answer")
     */
    public $question;

    public function getId(): ?int
    {
        return $this->id;
    }
}
