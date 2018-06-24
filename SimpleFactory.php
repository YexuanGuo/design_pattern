<?php
/**
 * 简单工厂模式实现
 * Simple Factory Pattern
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/6/24
 * Time: 下午10:50
 */

interface people
{
    public function say();
}

class man implements people
{
    public function say()
    {
        // TODO: Implement say() method.

        echo("Hey Man! \n");
    }
}

class women implements people
{
    public function say()
    {
        // TODO: Implement say() method.
        echo("Hey Women! \n");
    }
}

class SimpleFactory
{
    static public function getMan()
    {
        return new man();
    }

    static public function getWomen()
    {
        return new women();
    }
}

SimpleFactory::getMan()->say();
SimpleFactory::getWomen()->say();