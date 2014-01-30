// source: http://docs.joomla.org/JDocumentHTML/countModules

<?php if ($this->countModules( 'user1' )) : ?>
  <div class="user1">
    <jdoc:include type="modules" name="user1" style="rounded" />
  </div>
<?php endif; ?>
