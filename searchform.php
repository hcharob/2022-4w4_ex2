<form class="recherche" method="get" action=" <?php echo get_home_url('/')?> ">
    <input type="text" class="recherche__input" name="s" value="<?php get_search_query(); ?>">
    <button class="recherche__bouton">
        <svg width="32px" height="32px" viewBox="0 0 57 57" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            color="#000000">
            <g transform="translate(1 1)" fill-rule="evenodd">
                <circle cx="5" cy="50" r="5">
                    <animate attributeName="cy" begin="0s" dur="2.2s" values="50;5;50;50" calcMode="linear"
                        repeatCount="indefinite"></animate>
                    <animate attributeName="cx" begin="0s" dur="2.2s" values="5;27;49;5" calcMode="linear"
                        repeatCount="indefinite"></animate>
                </circle>
                <circle cx="27" cy="5" r="5">
                    <animate attributeName="cy" begin="0s" dur="2.2s" from="5" to="5" values="5;50;50;5"
                        calcMode="linear" repeatCount="indefinite"></animate>
                    <animate attributeName="cx" begin="0s" dur="2.2s" from="27" to="27" values="27;49;5;27"
                        calcMode="linear" repeatCount="indefinite"></animate>
                </circle>
                <circle cx="49" cy="50" r="5">
                    <animate attributeName="cy" begin="0s" dur="2.2s" values="50;50;5;50" calcMode="linear"
                        repeatCount="indefinite"></animate>
                    <animate attributeName="cx" from="49" to="49" begin="0s" dur="2.2s" values="49;5;27;49"
                        calcMode="linear" repeatCount="indefinite"></animate>
                </circle>
            </g>
        </svg>
    </button>
</form>