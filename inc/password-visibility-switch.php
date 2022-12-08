<?php
/**
 * Provide a password visibility toggle switch
 *
 * @link https://wpforms.com/developers/how-to-add-a-password-visibility-toggle-button/
 */
 
function wpf_dev_password_toggle() {
?>
    <script type="text/javascript">
        jQuery(function($){
            
            $( '.wpforms-field-password' ).each(function(){
                
                $(this).find( 'input' ).each(function(){
                    
                    $(this).before( '<i class="fa fa-eye-slash fa-eye" id="password-toggle"></i>' );
                    var $passwordInput = $(this);
                    
                    $(this).parent().find( '#password-toggle' ).on( 'click', function(){
                        
                        var type = $passwordInput.attr( 'type' ) === 'password' ? 'text' : 'password';
                        $passwordInput.attr( 'type', type);
                        $(this).toggleClass( 'fa-eye-slash' );
                        
                    });
                    
                });
                
            });
            
        });
    </script>
<?php
}

add_action( 'wpforms_wp_footer_end', 'wpf_dev_password_toggle', 30 );