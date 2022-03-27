"use strict";

jQuery(window).load(function($) {

    var container = jQuery("#work-grid");
    //  Load more Portfolio Home
    jQuery('#load-more').click(function() {
        var self = jQuery(this);
        self.hide();
        var url = 'ajax/portfolio-3column.html';
        var loadanim = jQuery('a#load-more i');
        loadanim.addClass('spinef');
        var itemLoad = 4;
        jQuery.ajax({
            url: url,
            data: {
                itemCount: itemLoad
            }
        }).done(function(data) {
            container.isotope('insert', jQuery(data));

            container.isotope('insert', jQuery(data.content)).imagesLoaded(function() {
                container.isotope('layout');
                loadanim.removeClass('spinef');
                likeEf();
            });

            self.show();
        }).fail(function() {
            self.text('Error while loading!');
        });
    });
    //Load more 2 column
    jQuery('#load-more-2col').click(function() {
        var self = jQuery(this);
        self.hide();
        var url = 'ajax/portfolio-2column.html';
        var loadanim = jQuery('a#load-more i');
        loadanim.addClass('spinef');
        var itemLoad = 4;
        jQuery.ajax({
            url: url,
            data: {
                itemCount: itemLoad
            }
        }).done(function(data) {
            container.isotope('insert', jQuery(data));

            container.isotope('insert', jQuery(data.content)).imagesLoaded(function() {
                container.isotope('layout');
                loadanim.removeClass('spinef');
                likeEf();
            });

            self.show();
        }).fail(function() {
            self.text('Error while loading!');
        });
    });


});