<?php
if ($this->pageCount > 1):
    $getParams = $_GET;
?>
<nav class="pagination-nav" role="navigation">
    <ul class="pagination">
        <?php if (isset($this->previous)): ?>
        <!-- Previous page link -->
        <li class="pagination_previous">
            <?php $getParams['page'] = $previous; ?>
            <a rel="prev" href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>"><?php echo __('Previous Page'); ?></a>
        </li>
        <?php endif; ?>

        <li class="page-input">
        <form action="<?php echo html_escape($this->url()); ?>" method="get" accept-charset="utf-8">
        <?php
        $hiddenParams = array();
        $entries = explode('&', http_build_query($getParams));
        foreach ($entries as $entry) {
            if(!$entry) {
                continue;
            }
            list($key, $value) = explode('=', $entry);
            $hiddenParams[urldecode($key)] = urldecode($value);
        }

        foreach($hiddenParams as $key => $value) {
            if($key != 'page') {
                echo $this->formHidden($key,$value);
            }
        }

        // Manually create this input to allow an omitted ID
        $pageInput = '<label class="hidden" for="' . html_escape($this->formID) . '">Go directly to page</label>'
                    . '<input type="text" name="page" id="' . html_escape($this->formID) . '" title="'
                    . html_escape(__('Current Page, ' . html_escape($this->current)))
                    . '" value="'
                    . html_escape($this->current) . '">';
        echo __('%s of %s', $pageInput, $this->last);
        ?>
        </form>
        </li>

        <?php if (isset($this->next)): ?>
        <!-- Next page link -->
        <li class="pagination_next">
            <?php $getParams['page'] = $next; ?>
            <a rel="next" href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>"><?php echo __('Next Page'); ?></a>
        </li>
        <?php endif; ?>
    </ul>
</nav>

<?php endif; ?>
