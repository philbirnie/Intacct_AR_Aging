<?php
/**
 * Abstract Accounts Receivable
 *
 * @package    Intacct
 * @subpackage Accounts Receivable
 * @since      2020 Mar
 */

namespace Intacct\AccountsReceivable;

use Intacct\Functions\AbstractFunction;

abstract class AbstractArAging extends AbstractFunction {

    /** @var string */
    protected $agingPeriods;

    /** @var string */
    protected $locationId;

    /** @var bool */
    protected $showDetails = false;

    /** @var int */
    protected $customerId;

    /**
     * @return string
     */
    public function getAgingPeriods()
    {
        return $this->agingPeriods;
    }

    /**
     * @param string $agingPeriods
     */
    public function setAgingPeriods($agingPeriods)
    {
        $this->agingPeriods = $agingPeriods;
    }

    /**
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param string $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return bool
     */
    public function isShowDetails()
    {
        return $this->showDetails;
    }

    /**
     * @param bool $showDetails
     */
    public function setShowDetails($showDetails)
    {
        $this->showDetails = $showDetails;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
}
