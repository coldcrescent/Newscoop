<?php

namespace Newscoop\Entity\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NewscoopEntityLanguageProxy extends \Newscoop\Entity\Language implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->_load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->_load();
        return parent::getName();
    }

    public function setNativeName($native_name)
    {
        $this->_load();
        return parent::setNativeName($native_name);
    }

    public function getNativeName()
    {
        $this->_load();
        return parent::getNativeName();
    }

    public function setCodePage($code_page)
    {
        $this->_load();
        return parent::setCodePage($code_page);
    }

    public function getCodePage()
    {
        $this->_load();
        return parent::getCodePage();
    }

    public function setCode($code)
    {
        $this->_load();
        return parent::setCode($code);
    }

    public function getCode()
    {
        $this->_load();
        return parent::getCode();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'code_page', 'original_name', 'code');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}