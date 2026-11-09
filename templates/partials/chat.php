<?php
// Zoho SalesIQ chat widget. Set 'zoho_salesiq_widget' in config/brand.php to enable.
if ($code = brand('zoho_salesiq_widget')): ?>
<script type="text/javascript" id="zsiqchat">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || {widgetcode: <?= json_encode($code) ?>, values: {}, ready: function() {}};
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zohopublic.com/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
</script>
<script>
    $zoho.salesiq.ready = function() { $zoho.salesiq.chat.start(); };
</script>
<?php endif; ?>
