<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Request
{
    const TIMEOUT = 4;
    const PENDING_MERCHANT = 3;
    const PENDING = 2;
    const WAITING = 1;
    const OK = 0;
    const INPUT_ERROR = -1;
    const FAILED = -2;
    const FAILED_RETRY = -3;
    const DECLINED = -4;
    const DECLINED_RETRY = -5;
    const SECURITY_ERROR = -6;
    const INTERNAL_SERVER_ERROR = -7;
    const BUSINESS_RULE_ERROR = -8;
    const FRAUD = -9;
    const CUSTOMER_PROCESSING_ERROR = -10;
    const REFERRALS = -11;

    /**
     * @var Body
     */
    private $body;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Header
     */
    private $header;

    /**
     * @var int
     */
    private $result;

    /**
     * Request constructor.
     *
     * @param Body $body
     * @param string $description
     * @param Header $header
     * @param int $result
     */
    public function __construct(
        Body $body,
        string $description,
        Header $header,
        int $result
    ) {
        $this->body = $body;
        $this->description = $description;
        $this->header = $header;
        $this->result = $result;
    }

    /**
    * @return Body
    */
    public function getBody()
    {
        return $this->body;
    }

    /**
    * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }

    /**
    * @return Header
    */
    public function getHeader()
    {
        return $this->header;
    }

    /**
    * @return int
    */
    public function getResult()
    {
        return $this->result;
    }
}
