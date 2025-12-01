jQuery(document).ready(function($){

    let frame;
    let galleryInput = $("#hm_gallery_input");
    let galleryWrapper = $("#hm_gallery_wrapper");

    // Open Media Library
    $("#hm_add_images").on("click", function(e){
        e.preventDefault();

        if (frame) {
            frame.open();
            return;
        }

        frame = wp.media({
            title: "Select Images",
            multiple: true,
            library: { type: "image" }
        });

        frame.on("select", function(){
            let attachments = frame.state().get("selection").toArray();

            attachments.forEach(img => {
                let id = img.id;
                let url = img.attributes.sizes.thumbnail.url;

                galleryWrapper.append(`
                    <div class="hm-gallery-item" data-id="${id}">
                        <img src="${url}">
                        <span class="hm-remove">&times;</span>
                    </div>
                `);
            });

            updateGalleryInput();
        });

        frame.open();
    });

    // Remove image
    galleryWrapper.on("click", ".hm-remove", function(){
        $(this).parent().remove();
        updateGalleryInput();
    });

    // Update hidden field
    function updateGalleryInput(){
        let ids = [];
        galleryWrapper.find(".hm-gallery-item").each(function(){
            ids.push($(this).data("id"));
        });
        galleryInput.val(ids.join(","));
    }

    // Make gallery sortable
    galleryWrapper.sortable({
        update: function() {
            updateGalleryInput();
        }
    });
});
