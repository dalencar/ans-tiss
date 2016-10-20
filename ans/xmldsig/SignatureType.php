<?php

namespace ans\xmldsig;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \ans\xmldsig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \ans\xmldsig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \ans\xmldsig\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @property \ans\xmldsig\ObjectXsd[] $object
     */
    private $object = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signedInfo
     *
     * @return \ans\xmldsig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \ans\xmldsig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\ans\xmldsig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \ans\xmldsig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \ans\xmldsig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\ans\xmldsig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \ans\xmldsig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \ans\xmldsig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\ans\xmldsig\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \ans\xmldsig\ObjectXsd $object
     */
    public function addToObject(\ans\xmldsig\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param scalar $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \ans\xmldsig\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \ans\xmldsig\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object)
    {
        $this->object = $object;
        return $this;
    }


}

