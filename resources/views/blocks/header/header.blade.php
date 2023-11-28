<?php if($auth): ?>
  @include('blocks.header._user')
<?php else: ?>
  @include('blocks.header._guest')
<?php endif; ?>