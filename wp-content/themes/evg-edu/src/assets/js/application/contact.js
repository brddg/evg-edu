(function() {
  var alert_box, contact_submit, handle_redirect, is_success;

  alert_box = function(message) {
    var html;
    html = '<div class="alert alert-danger">' + '<button aria-hidden="true" class="close" data-dismiss="alert" type="button">×</button>' + ("<div id=\"flash_error\">" + message + "</div>") + '</div>';
    return $('#myModal').prepend(html);
  };

  contact_submit = function() {
    return $('#myModal form').submit(function() {
      if ($('#inputName').val() === "" || $('#inputEmail').val() === "" || $('#inputSchool').val() === "" || $('#inputPhone').val() === "" || $('#inputDetail').val() === "") {
        alert_box('Please fill out all fields.');
        return false;
      } else {
        return true;
      }
    });
  };

  handle_redirect = function() {
    var url;
    url = window.location.origin + window.location.pathname;
    url += "?thanks=true";
    return $('#next').val(url);
  };

  is_success = function() {
    var key, params, query, raw_vars, v, val, _i, _len, _ref;
    query = window.location.search.substring(1);
    raw_vars = query.split("&");
    params = {};
    for (_i = 0, _len = raw_vars.length; _i < _len; _i++) {
      v = raw_vars[_i];
      _ref = v.split("="), key = _ref[0], val = _ref[1];
      params[key] = decodeURIComponent(val);
    }
    if (params["thanks"] === "true") {
      return $('#thanks').removeClass('hidden');
    }
  };

  $(function() {
    contact_submit();
    handle_redirect();
    return is_success();
  });

}).call(this);