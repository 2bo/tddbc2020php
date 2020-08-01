<?php

namespace Tddbc;

use Exception;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ClosedRangeTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    // protected function setUp(): void
    // {
    //     $this->sut = new ClosedRange();
    // }

    /**
     * @test
     * 
     */
    public function 下端点と上端点を持つただし、上端点より下端点が大きい閉区間を作ることはできない()
    {
        //アサーション
        $this->expectException(InvalidArgumentException::class);
        //準備&実行
        $closedRange = new ClosedRange(8, 3);
    }

    /**
     * @test
     * 文字列表現を返すことができる
     * 文字列表記：[下端点、上端点]
     */
    public function 下端点3上端点8をもつ閉区間がカッコ3カンマ8カッコの文字列表記を返す()
    {
        //準備
        $closedRange = new ClosedRange(3, 8);
        //実行
        $actual = $closedRange->toString();
        //アサーション
        self::assertSame('[3,8]', $actual);
    }
    /**
     * @test
     * 文字列表現を返すことができる
     * 文字列表記：[下端点、上端点]
     */
    public function 下端点4上端点9をもつ閉区間がカッコ4カンマ9カッコの文字列表記を返す()
    {
        //準備
        //実行
        $closedRange = new ClosedRange(4, 9);
        $actual = $closedRange->toString();
        //アサーション
        self::assertSame('[4,9]', $actual);
    }

    /**
     * @test
     * 指定した整数を含むかどうか判定できる
     */
    public function 下端点3上端点8をもつ閉区間に3が含まれる()
    {
        //準備
        $closedRange = new ClosedRange(3, 8);
        //実行
        $actual = $closedRange->contains(3);
        //アサーション
        self::assertTrue($actual);
    }

    /**
     * @test
     * 指定した整数を含むかどうか判定できる
     */
    public function 下端点3上端点8をもつ閉区間に8が含まれる()
    {
        //準備
        $closedRange = new ClosedRange(3, 8);
        //実行
        $actual = $closedRange->contains(8);
        //アサーション
        self::assertTrue($actual);
    }

    /**
     * @test
     * 指定した整数を含むかどうか判定できる
     */
    public function 下端点3上端点8をもつ閉区間に2が含まれない()
    {
        //準備
        $closedRange = new ClosedRange(3, 8);
        //実行
        $actual = $closedRange->contains(2);
        //アサーション
        self::assertFalse($actual);
    }

    /**
     * @test
     * 指定した整数を含むかどうか判定できる
     */
    public function 下端点3上端点8をもつ閉区間に9が含まれない()
    {
        //準備
        $closedRange = new ClosedRange(3, 8);
        //実行
        $actual = $closedRange->contains(9);
        //アサーション
        self::assertFalse($actual);
    }

    /**
     * @test
     * 別の閉区間と等価かどうか判定できる
     */
    public function 下端点3上端点8をもつ2つの閉区間を等価と判定する()
    {
        //準備
        $closedRange = new ClosedRange(3, 8);
        $closedRange2 = new ClosedRange(3, 8);
        //実行
        $actual = $closedRange->equals($closedRange2);
        //アサーション
        self::assertTrue($actual);
    }
}
