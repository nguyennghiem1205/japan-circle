<?php
namespace App\Test\TestCase\View\Cell;

use App\View\Cell\JapanMembersCell;
use Cake\TestSuite\TestCase;

/**
 * App\View\Cell\JapanMembersCell Test Case
 */
class JapanMembersCellTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->request = $this->getMock('Cake\Network\Request');
        $this->response = $this->getMock('Cake\Network\Response');
        $this->JapanMembers = new JapanMembersCell($this->request, $this->response);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JapanMembers);

        parent::tearDown();
    }

    /**
     * Test display method
     *
     * @return void
     */
    public function testDisplay()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
