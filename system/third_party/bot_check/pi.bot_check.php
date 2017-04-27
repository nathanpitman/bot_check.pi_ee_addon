<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bot Check Plug-in
 *
 * @package     ExpressionEngine
 * @subpackage  Addons
 * @category    Plug-in
 * @author      Nathan Pitman
 * @link        http://www.ihasco.co.uk
 */

class Bot_check {

    public function __construct()
    {

        // Check for bots and return a 403
        if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
            ee()->output->set_status_header(403);
            ee()->output->show_user_error('general', "Forbidden");
        }

    }
}

/* End of file pi.bot_check.php */
/* Location: ./system/expressionengine/third_party/bot_check/pi.bot_check.php */
