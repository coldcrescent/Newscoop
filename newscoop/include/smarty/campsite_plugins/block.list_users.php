<?php
/**
 * @package Newscoop
 * @copyright 2011 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Newscoop list_users block plugin
 *
 * Type:     block
 * Name:     list_users
 *
 * @param array $params
 * @param mixed $content
 * @param object $smarty
 * @param bool $repeat
 * @return string
 */
function smarty_block_list_users($params, $content, &$smarty, &$repeat)
{
    $context = $smarty->getTemplateVars('gimme');
    if (!isset($content)) {
        $start = $context->next_list_start('Newscoop\TemplateList\UsersList');
        $list = new Newscoop\TemplateList\UsersList(new Newscoop\User\UserCriteria());
        $list->getList($start, $params);
        if ($list->isEmpty()) {
            $context->setCurrentList($list, array());
            $context->resetCurrentList();
            $repeat = false;
            return null;
        }

        $context->setCurrentList($list, array('list_user'));
        $context->list_user = $context->current_users_list->current;

        $repeat = true;
    } else {
        $context->current_users_list->defaultIterator()->next();
        if (!is_null($context->current_users_list->current)) {
            $context->list_user = $context->current_users_list->current;
            $repeat = true;
        } else {
            $context->resetCurrentList();
            $repeat = false;
        }
    }

    return $content;
}
