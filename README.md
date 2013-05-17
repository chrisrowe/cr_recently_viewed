# cr_recently_viewed

EE plugin to track and recall viewed entry_ids. Creates a `recently_viewed` cookie and prepends entry_ids as required.

## Usage

`{exp:cr_recently_viewed:addrecent entry_id="{entry_id}"}` to save an entry.

```
{exp:channel:entries
    channel="people"
    limit="5"
    entry_id="{exp:cr_recently_viewed:getrecent}"
    fixed_order="{exp:cr_recently_viewed:getrecent}"
    parse="inward"
}
```
to retrieve the entry_ids in descending order visited.

### By

Chris Rowe  
mail@chrisrowe.net  
[@chrisrowe](http://twitter.com/chrisrowe)
