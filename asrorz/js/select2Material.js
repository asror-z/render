$(document).ready(function() {
    $(document).on("select2:open select2:focus", "select", function() {
        var $this = $(this);
        var $parent = $(this).parent();

        clearTimeout($this.data("blurring"));

        $this.data("blurring", setTimeout(function() {
            $parent.children("label").addClass("active").addClass("focus");
            $parent.find(".select2-selection").addClass("focus");
        }));
    });

    $(document).on("select2:close", "select", function() {
        var $this = $(this);
        var $parent = $(this).parent();
        var $input = $parent.find("input.select2-search__field");

        clearTimeout($this.data("blurring"));

        $this.data("blurring", setTimeout(function() {
            if ($input.is(":focus")) {
                return;
            }

            $parent.children("label").removeClass("focus");
            $parent.find(".select2-selection").removeClass("focus");

            if ($this.find("option:selected").length) {
                return;
            }

            $parent.children("label").removeClass("active");
        }));
    });

    $(document).on("blur", ".select2 input.select2-search__field", function() {
        setTimeout(function() {
            $(this).parents(".select2").siblings("select").trigger("select2:close");
        }.bind(this), 100);
    });

    $(document).on("focus", ".select2 input.select2-search__field", function() {
        setTimeout(function() {
            $(this).parents(".select2").siblings("select").trigger("select2:open");
        }.bind(this), 100);
    });

    $(document).on("select2:unselect", "select", function(e) {
        if (!e.params.originalEvent) {
            return;
        }

        e.params.originalEvent.stopPropagation();
    });
});
