<?php
/**
 * 工厂方法模式实现
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/6/24
 * Time: 下午11:10
 *
 * 工厂方法模式：
 * 定义一个用于创建对象的接口，让子类决定哪个类实例化。他可以解决简单工厂模式中的封闭开放原则问题。
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
        echo "Hey Boby!".PHP_EOL;
    }
}

class women implements people
{
    public function say()
    {
        // TODO: Implement say() method.
        echo "Hey Girl!".PHP_EOL;
    }
}

/**
 * Interface getPeople
 * 与简单工厂模式对比。这里本质区别在于，此处是将对象的创建抽象成一个接口。
 */

interface getPeople
{
    public function getPeopleFunc();
}

class FactoryMan implements getPeople
{
    public function getPeopleFunc()
    {
        // TODO: Implement getPeopleFunc() method.
        return new man();
    }
}

class FactoryWomen implements getPeople
{
    public function getPeopleFunc()
    {
        // TODO: Implement getPeopleFunc() method.
        return new women();
    }
}

class Client
{
    public function test()
    {
        $factory = new FactoryMan();
        $man = $factory->getPeopleFunc();
        $man->say();

        $factory = new FactoryWomen();
        $man = $factory->getPeopleFunc();
        $man->say();
    }
}

$go = new Client();
$go->test();