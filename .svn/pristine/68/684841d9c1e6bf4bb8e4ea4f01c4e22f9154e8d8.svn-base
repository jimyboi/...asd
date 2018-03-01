<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header",array('layout','calendar')); ?>
<body>
	<div class="container">
		<div class="row" style="border-top:1px solid #202f80;border-bottom:1px solid #202f80;padding-top:1em;padding-bottom:2em;">
			<div class="col-md-12 head "  >
			 	<div class="page-header">
					<div class="pull-right form-inline">
						<div class="btn-group">
							<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
							<button class="btn btn-default" data-calendar-nav="today">Today</button>
							<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
						</div>
						<div class="btn-group">
							<button class="btn btn-warning" data-calendar-view="year">Year</button>
							<button class="btn btn-warning active" data-calendar-view="month">Month</button>
						</div>
					</div>

					<h3></h3>
				</div>
			</div>
			<div class="col-md-12">
				<div id="calendar"></div>
			</div>
		</div>
	</div>
</body>
	<div class="modal fade" id="events-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-uppercase">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3>Event</h3>
				</div>
				<div class="modal-body" style="height: 400px">
				</div>
				<div class="modal-footer">
					<a href="#" data-dismiss="modal" class="btn">Close</a>
				</div>
			</div>
		</div>
	</div>
<?php get_footer('footer',array('jstz.min','calendar.min','underscore-min')); ?>
<!-- '<?php echo base_url('calendar/getInfo'); ?>' -->
<script type="text/javascript">	
	var options = {
		events_source: '<?php echo base_url('get-info'); ?>',
		view: 'month',
		tmpl_path: '<?php echo themes_url('tmpls/'); ?>/',
		tmpl_cache: false,
		day: '<?php echo date('Y-m-d'); ?>',
		modal : "#events-modal",
		modal_type : "ajax", 
		modal_title : function (e) { 
			return e.title;

		},
		onAfterEventsLoad: function(events) {
			if(!events) {
				return;
			}
			var list = $('#eventlist');
			list.html('');
			$.each(events, function(key, val) {
				$(document.createElement('li'))
					<?php if ($this->session->userdata('thenetworkplus')): ?>
					.html('<a href="' + val.url + '">' + val.title + '</a>')
					<?php else: ?>
					.html(val.url)
					<?php endif; ?>
					.appendTo(list);
			});
		},
		onAfterViewLoad: function(view) {
			$('.page-header h3').text(this.getTitle());
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	};

	var calendar = $('#calendar').calendar(options);

	$('.btn-group button[data-calendar-nav]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.navigate($this.data('calendar-nav'));
		});
	});

	$('.btn-group button[data-calendar-view]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.view($this.data('calendar-view'));
		});
	});
</script>
 
