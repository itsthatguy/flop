function edit_link (start)
{
  jQuery('#item_' + start).load (wp_apl_base, { cmd: 'edit', id: start});
  return false;
}

function delete_link (start)
{
  if (confirm (wp_apl_delete))
  {
    jQuery.post (wp_apl_base, { cmd: 'delete', id: start}, function(data) { if (data == 'OK') jQuery('#item_' + start).fadeOut ()});
  }
  return false;
}

function save_link (form)
{
  jQuery('#links').load (wp_apl_base, jQuery(form).formToArray ());
  return false;
}

function cancel_link (start)
{
  jQuery('#item_' + start).load (wp_apl_base, { cmd: 'cancel', id: start});
  return false;
}

function delete_migration (pos)
{
  if (confirm (wp_apl_delete))
  {
    jQuery.post (wp_apl_base, { cmd: 'delete_migration', id: pos}, function(data) { if (data == 'OK') jQuery('#item_' + pos).fadeOut ()});
  }
  return false;
}

function edit_migration (pos)
{
  jQuery('#item_' + pos).load (wp_apl_base, { cmd: 'edit_migration', id: pos});
  return false;
}
