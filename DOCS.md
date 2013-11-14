### Features
* Convert Text To Title Case
* Convert text to sentence case
* CONVERT TEXT TO UPPERCASE
* convert text to lowercase

### Installation
Upload the `garnish` folder to `system/expressionengine/third_party`.

### `{exp:garnish:title_case}`
`{exp:garnish:title_case}` converts text to title case.

    {exp:garnish:title_case}five years{/exp:garnish:title_case}

returns

    Five Years

### `{exp:garnish:sentence_case}`
`{exp:garnish:sentence_case}` converts text to sentence case.

    {exp:garnish:sentence_case}it was cold, and it rained, so I felt like an actor.{/exp:garnish:sentence_case}

returns

    It was cold, and it rained, so I felt like an actor.

### `{exp:garnish:uppercase}`
`{exp:garnish:uppercase}` converts text to uppercase.

    {exp:garnish:uppercase}my brain hurts a lot!{/exp:garnish:uppercase}

returns

    MY BRAIN HURTS A LOT!

### `{exp:garnish:lowercase}`
`{exp:garnish:lowercase}` converts text to lowercase.

    {exp:garnish:lowercase}That's all we've got.{/exp:garnish:lowercase}

returns

    that's all we've got.

### Pro Tip
#### Leave HTML Out of the Tag Pair
Garnish finds words by looking for spaces, so if you have HTML tags within the tag pair, you may run into issues. For example:

    {exp:garnish:title_case}<h1>five years</h1>{/exp:garnish:title_case}
    <h1>{exp:garnish:title_case}five years{/exp:garnish:title_case}</h1>

returns

    <h1>five Years</h1>
    <h1>Five Years</h1>
