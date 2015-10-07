<?php

class DbRowIterator implements Iterator
{
    /** @var PDOStatement $pdoStatement The PDO Statement to execute */
    protected $pdoStatement;
    /** @var int $key The cursor pointer */
    protected $key;
    /** @var  bool|\stdClass The resultset for a single row */
    protected $result;
    /** @var  bool $valid Flag indicating there's a valid resource or not */
    protected $valid = TRUE;

    public function __construct(PDOStatement $PDOStatement)
    {
        $this->pdoStatement = $PDOStatement;
        //$this->valid = TRUE;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->result;
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->key++;
        $this->result = $this->pdoStatement->fetch(
            PDO::FETCH_OBJ,
            PDO::FETCH_ORI_ABS,
            $this->key
        );

        if ($this->result === FALSE)
        {
            $this->valid = FALSE;

            return NULL;
        }
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return $this->valid;
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->key = 0;
        $this->next();
    }
}