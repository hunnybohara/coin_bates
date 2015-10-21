<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MerchantTaxonomiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MerchantTaxonomiesTable Test Case
 */
class MerchantTaxonomiesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.merchant_taxonomies',
        'app.taxonomies',
        'app.merchants',
        'app.affiliate_networks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MerchantTaxonomies') ? [] : ['className' => 'App\Model\Table\MerchantTaxonomiesTable'];
        $this->MerchantTaxonomies = TableRegistry::get('MerchantTaxonomies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MerchantTaxonomies);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
