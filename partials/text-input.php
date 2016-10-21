<div class="form-group <?php if ( 'INVALID' === $atts['state'] ) echo 'has-error has-feedback'; elseif ( 'VALID' === $atts['state'] ) echo 'has-success has-feedback'; ?>">
  <label class="control-label" for="<?php echo $atts['slug']; ?>"><?php echo $atts['label']; ?></label>
  <input id="<?php echo $atts['slug']; ?>" class="form-control" name="<?php echo $atts['slug']; ?>" type="text" value="<?php echo $atts['value']; ?>">
  <?php if ( 'INVALID' === $atts['state'] ) : ?>
    <span class="help-block"><?php echo $atts['feedback']; ?></span>
    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  <?php elseif ( 'VALID' === $atts['state'] ) : ?>
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  <?php endif; ?>
</div>
