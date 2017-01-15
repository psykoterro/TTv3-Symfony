<?php
/**
 * Created by IntelliJ IDEA.
 * User: meg4r0m
 * Date: 14/01/17
 * Time: 13:04
 */

namespace Users\UsersBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 *
 * @package UsersBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="`users`")
 */
class Users extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Informations\InformationsBundle\Entity\News", mappedBy="user")
     */
    private $news;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime")
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=39)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="uploaded", type="bigint")
     */
    private $uploaded = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="downloaded", type="bigint")
     */
    private $downloaded = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="donated", type="integer", length=5)
     */
    private $donated;

    /**
     * @var string
     *
     * @ORM\Column(name="notifs", type="string", length=100)
     */
    private $notifs;

    /**
     * @var string
     *
     * @ORM\Column(name="modcomment", type="text", nullable=true)
     */
    private $modcomment;

    /**
     * @var bool
     *
     * @ORM\Column(name="warned", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $warned = 'no';

    /**
     * @var int
     *
     * @ORM\Column(name="last_browse", type="integer")
     */
    private $lastBrowse = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="forumbanned", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $forumbanned = 'no';

    /**
     * @var bool
     *
     * @ORM\Column(name="commentpm", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $commentpm = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="passkey", type="string", length=32)
     */
    private $passkey;

    /**
     * @var int
     *
     * @ORM\Column(name="comments", type="integer")
     */
    private $comments = '0';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return InfosUser
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return InfosUser
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set uploaded
     *
     * @param integer $uploaded
     *
     * @return InfosUser
     */
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;

        return $this;
    }

    /**
     * Get uploaded
     *
     * @return int
     */
    public function getUploaded()
    {
        return $this->uploaded;
    }

    /**
     * Set downloaded
     *
     * @param integer $downloaded
     *
     * @return InfosUser
     */
    public function setDownloaded($downloaded)
    {
        $this->downloaded = $downloaded;

        return $this;
    }

    /**
     * Get downloaded
     *
     * @return int
     */
    public function getDownloaded()
    {
        return $this->downloaded;
    }

    /**
     * Set donated
     *
     * @param integer $donated
     *
     * @return InfosUser
     */
    public function setDonated($donated)
    {
        $this->donated = $donated;

        return $this;
    }

    /**
     * Get donated
     *
     * @return int
     */
    public function getDonated()
    {
        return $this->donated;
    }

    /**
     * Set notifs
     *
     * @param string $notifs
     *
     * @return InfosUser
     */
    public function setNotifs($notifs)
    {
        $this->notifs = $notifs;

        return $this;
    }

    /**
     * Get notifs
     *
     * @return string
     */
    public function getNotifs()
    {
        return $this->notifs;
    }

    /**
     * Set modcomment
     *
     * @param string $modcomment
     *
     * @return InfosUser
     */
    public function setModcomment($modcomment)
    {
        $this->modcomment = $modcomment;

        return $this;
    }

    /**
     * Get modcomment
     *
     * @return string
     */
    public function getModcomment()
    {
        return $this->modcomment;
    }

    /**
     * Set warned
     *
     * @param boolean $warned
     *
     * @return InfosUser
     */
    public function setWarned($warned)
    {
        $this->warned = $warned;

        return $this;
    }

    /**
     * Get warned
     *
     * @return bool
     */
    public function getWarned()
    {
        return $this->warned;
    }

    /**
     * Set lastBrowse
     *
     * @param integer $lastBrowse
     *
     * @return InfosUser
     */
    public function setLastBrowse($lastBrowse)
    {
        $this->lastBrowse = $lastBrowse;

        return $this;
    }

    /**
     * Get lastBrowse
     *
     * @return int
     */
    public function getLastBrowse()
    {
        return $this->lastBrowse;
    }

    /**
     * Set forumbanned
     *
     * @param boolean $forumbanned
     *
     * @return InfosUser
     */
    public function setForumbanned($forumbanned)
    {
        $this->forumbanned = $forumbanned;

        return $this;
    }

    /**
     * Get forumbanned
     *
     * @return bool
     */
    public function getForumbanned()
    {
        return $this->forumbanned;
    }

    /**
     * Set commentpm
     *
     * @param boolean $commentpm
     *
     * @return InfosUser
     */
    public function setCommentpm($commentpm)
    {
        $this->commentpm = $commentpm;

        return $this;
    }

    /**
     * Get commentpm
     *
     * @return bool
     */
    public function getCommentpm()
    {
        return $this->commentpm;
    }

    /**
     * Set passkey
     *
     * @param string $passkey
     *
     * @return InfosUser
     */
    public function setPasskey($passkey)
    {
        $this->passkey = $passkey;

        return $this;
    }

    /**
     * Get passkey
     *
     * @return string
     */
    public function getPasskey()
    {
        return $this->passkey;
    }

    /**
     * Set comments
     *
     * @param integer $comments
     *
     * @return InfosUser
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }
}