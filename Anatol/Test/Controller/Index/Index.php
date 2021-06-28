<?php
namespace Anatol\Test\Controller\Index;

use Magento\Cms\Api\Data\BlockInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;


class Index extends Action
{
    protected $spellCheckAdapter;

    protected $resourceAdapter;

    protected $adapter;

    protected $requestApi;

    protected $orderRepository;

    protected $creditCard;

    protected $config;

    protected $attributes;

    private $scopeConfig;

    protected $ertConfig;

    protected $pricesCollectionFactory;

    protected $optionSettingsCollectionFactory;

    protected $optionSettingRepository;

    protected $cmsBlockLinkRepository;

    protected $searchCriteriaBuilder;

    protected $cmsOptionFilter;

    protected $eavConfig;

    protected $badge;

    private $productRepository;

    public function __construct(
        Context $context
    ) {


        parent::__construct($context);
    }

    public function execute()
    {
        echo ' index ';
       
    }
}
