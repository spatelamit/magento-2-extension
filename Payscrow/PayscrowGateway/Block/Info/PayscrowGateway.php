<?php


/**
 * Created by Byteworks Limited.
 * Author: Chibuzor Ogbu
 * Date: 02/07/2017
 * Time: 4:47 PM
 */
namespace Payscrow\PayscrowGateway\Block\Info;

use Magento\Payment\Block\Info;

class PayscrowGateway extends Info
{
    protected function _prepareSpecificInformation($transport = null)
    {
        if (null !== $this->_paymentSpecificInformation)
        {
            return $this->_paymentSpecificInformation;
        }

        $data = [];
        if ($this->getInfo()->getCustomFieldOne())
        {
            $data[__('Custom Field One')] = $this->getInfo()->getCustomFieldOne();
        }

        if ($this->getInfo()->getCustomFieldTwo())
        {
            $data[__('Custom Field Two')] = $this->getInfo()->getCustomFieldTwo();
        }

        $transport = parent::_prepareSpecificInformation($transport);

        return $transport->setData(array_merge($data, $transport->getData()));
    }
    
}