<?php
class categorys extends db
{
    function getCategory()
    {
        $sql = "select * from categories";
        return $this->getData($sql);
    }
}
