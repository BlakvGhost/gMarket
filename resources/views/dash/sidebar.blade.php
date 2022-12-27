<ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="produit">
        <a href="{{ route('produit.index') }}" class="oswald-bold text-decoration-none">Les Produits</a>
        <a href="{{ route('produit.create') }}" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="annonce">
        <a href="{{ route('annonce.index') }}" class="oswald-bold text-decoration-none">Nos Annonces</a>
        <a href="{{ route('annonce.create') }}" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="category">
        <a href="{{ route('category.index') }}" class="oswald-bold text-decoration-none">Les Categories</a>
        <a href="{{ route('category.index') }}" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="technology">
        <a href="technology.index" class="oswald-bold text-decoration-none">Nos Technologies</a>
        <a href="technology.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="service">
        <a href="service.index" class="oswald-bold text-decoration-none">Nos Services</a>
        <a href="service.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="about">
        <a href="about.index" class="oswald-bold text-decoration-none">A Propos</a>
        <a href="about.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="exploit">
        <a href="exploit.index" class="oswald-bold text-decoration-none">Pourquoi-Nous</a>
        <a href="exploit.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="customer">
        <a href="customer.index" class="oswald-bold text-decoration-none">Les Clients</a>
        <a href="customer.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="team">
        <a href="team.index" class="oswald-bold text-decoration-none">Notre Equipe</a>
        <a href="team.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="project">
        <a href="project.index" class="oswald-bold text-decoration-none">Nos Projets</a>
        <a href="project.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-dark link" data-url="blog">
        <a href="blog.index" class="oswald-bold text-decoration-none">Blogs</a>
        <a href="blog.create" class="float-end oswald-bold"><i
                class="mdi mdi-plus-circle-outline"></i></a>
    </li>
</ul>

<script>
    $('.link').each(function (key, elt) {
        if (window.location.pathname.includes($(elt).data('url'))){
            $(elt).removeClass('list-group-item-dark').addClass('list-group-item-light');
        }
    })
</script>