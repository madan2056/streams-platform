(function (window, document) {

    const layout = document.querySelector('textarea[name="sections"]');

    const templates = {
        'section': '<div class="card"></div>',
        'pane': '<div class="tab-pane"></div>',
        'wrapper': '<div class="card-block"></div>',
        'fields': '<div class="field-group"></div>',
        'tabs': `<ul class="nav nav-sections">
                    <li class="nav-item active">
                        <a data-toggle="tab" class="nav-link">
                            Tab Name
                        </a>
                    </li>
                </ul>`,
        'tab': `<li class="nav-item active">
            <a data-toggle="tab" class="nav-link">
                Tab Name
            </a>
        </li>`,
    };

    document.querySelector('a[data-add="tabs"]').addEventListener('click', function () {

        let section = document.createRange().createContextualFragment(templates.section);
        let wrapper = document.createRange().createContextualFragment(templates.wrapper);

        wrapper.innerHTML = 'Ryan is awesome';

        section.firstChild.appendChild(wrapper);

        console.log(wrapper);

        document.querySelector('form .card:last-child').parentNode.insertBefore(section, document.querySelector('form .card:last-child').nextSibling);
    });

})(window, document);
