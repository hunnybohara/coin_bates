<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MerchantCategoriesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\MerchantCategoriesController Test Case
 */
class MerchantCategoriesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.merchant_categories',
        'app.merchants',
        'app.affiliate_networks',
        'app.categories',
        'app.categories_merchants',
        'app.tags',
        'app.merchants_tags'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
