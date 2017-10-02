<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="comment")
 */

class Comments
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="productId",type="integer")
     */
    private $productId;

    /**
     * @ORM\Column(name="author",type="string",length=255)
     * @var string
     *
     */
    private $author;

    /**
     * @ORM\Column(name="commentText",type="text")
     * @var text
     *
     */
    private $commentText;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }




    /**
     * @return text
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * @param text $commentText
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getproductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setproductId($productId)
    {
        $this->productId = $productId;
    }




}