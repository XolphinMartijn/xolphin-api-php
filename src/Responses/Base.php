<?php

namespace Xolphin\Responses;

class Base {
    /** @var string */
    private $message;
    /** @var mixed */
    private $errors;

    /** @var int */
    public $page;
    /** @var int */
    public $limit;
    /** @var int */
    public $pages;
    /** @var int */
    public $total;

    /** @var object */
    protected $_embedded;

    /**
     * BaseResponse constructor.
     * @param object $data
     */
    public function __construct($data) {
        if(isset($data->message)) $this->message = $data->message;
        if(isset($data->errors)) $this->errors = $data->errors;
        if(isset($data->page)) $this->page = $data->page;
        if(isset($data->limit)) $this->limit = $data->limit;
        if(isset($data->pages)) $this->pages = $data->pages;
        if(isset($data->total)) $this->total = $data->total;
        if(isset($data->_embedded)) $this->_embedded = $data->_embedded;
    }

    /**
     * @return bool
     */
    public function isError() {
        return empty($this->message)?FALSE:TRUE;
    }

    /**
     * @return string
     */
    public function getErrorMessage() {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getErrorData() {
        return $this->errors;
    }
}