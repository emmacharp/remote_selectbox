<?php

/**
 *
 */
class EntryQueryRemoteSelectboxAdapter extends EntryQueryListAdapter
{
    public function getFilterColumns()
    {
        return ['value', 'handle'];
    }

    public function getSortColumns()
    {
        return ['value', 'handle'];
    }
}
