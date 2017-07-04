<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;


	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * @return int
	 */
	public function getId ()
	{
		return $this->id;
	}
}