<?php
/**
 * ArAging
 *
 * @package    Intacct
 * @subpackage AccountsReceivable
 * @since      2020 Mar
 */

namespace Intacct\AccountsReceivable;

use Intacct\Xml\XMLWriter;

class ArAging extends AbstractArAging
{

    /**
     * Write the function block XML
     *
     * @param XMLWriter $xml
     * @throw InvalidArgumentException
     */
    public function writeXml(XMLWriter &$xml)
    {
        $xml->startElement('function');
        $xml->writeAttribute('controlid', $this->getControlId());

        $xml->startElement('get_aging');
        $xml->writeElement('agingperiods', $this->getAgingPeriods());
        $xml->writeElement('customerid', $this->getCustomerId());
        $xml->writeElement('locationid', $this->getLocationId());
        $xml->writeElement('showdetails', $this->isShowDetails());

        $xml->endElement(); //get_aging
        $xml->endElement(); //function
    }
}
