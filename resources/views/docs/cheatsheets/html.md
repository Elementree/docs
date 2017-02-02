

# HTML Cheat sheet

## Main Root

### html

- root element

```html
<html>
    <head></head>
    <body></body>
</html>
```

## Document Metadata

### < base >
- base URL for all relative URLs. Only one instance allowed

## Content Sectioning

### < address >
- supplies contact info for nearest < article > or < body >

### < hgroup >
- heading of a section
- defines a single title, part of outline of document as the heading of the section it belongs to

## Text Context

### < figcaption >
- caption or legend associated with figure or illustration described by rest of data of < figure > must be the immediate ancestor

### < figure >
- self-contained content, frequently with caption (< figcation >)
- typically referenced as a single unit

### < hr >
- horizontal rule
- break between sections

### < main >
-  for main content

### < pre >
- preformatted text
- displayed as exactly as written, whitespace included

## Inline Text Semantics

### < abbr >
- represents abbreviation
- optionally provides full description when "title" attribute is used

### < bdi >
- bidirectional isolation
- isolates a span of Text

### < cite >
- a reference to creative work
- must include title of work or a URL reference

### < code >
- fragment of code
- default display is browser's monospace font

### < data >
- links content with a machine-readable
- if time- or date-related, < time > must be used

### < dfn >
- defining instance of a term

### < kbd >
- user input, produces inline element
- displayed in browser's default monospace

### < mark >
- highlight something

### < q >
- small/short quote

### < blockquote >
- larger/longer quote

### < rp >
- fall-back parentheses for browser's that do not support < ruby >

### < rt >
- embraces pronunciation of characters presented in a ruby annotations
- always used inside < ruby > element

### < ruby >
- for showing pronunciation of East Asian characters

### < s >
- strike-through

### < samp >
- sample output from computer program

### < small >
- makes text one size smaller
- in HTML5 used for small-print

### < sub >
- displayed below (and sometimes smaller) than main text

### < sup >
- same as sub, except it's displayed above main text

### < time >
- time or date displayed in full

### < u >
- underline

### < var >
- variable

### < wbr >
- word break opportunity
- indicated where word can break if display is small or minimized

## Image and Multimedia

### < area >
- defines hot-spot on an image.
- can add anchor
- only used with < map >

### < audio >
- embed sound content in documents
- can contain more than one source

### < img >
- represents image in document

### < map >
- used with < area > elements to define an image map (a clickable link area)

### < track >
- child of media elements
- let's you specify timed text tracks (or time-based data like subtitles)
- format: Web Video Text Tracks (.vtt)

### < video >
- embed a video in a document

## Embedded Content

### < embed >
-for plugins

### < object >
- external source
- can be treated as image, nested browsing context or resource to be handled by a plugin

### < param >
- defines parameters for an < object >

### < source >
- multiple media resources for < picture >, < audio > or < video >
- empty element
- usually same content imported with different formats

## Scripting

### < canvas >
- used with canvas scripting API to draw graphics and animations

### < noscript >
- defines section of HTML to be inserted if JavaScript is turned off or unsupported by browser

## Demarcating Edits

### < del >
- range of text that has been deleted from document. Often rendered with strike-through

### < ins >
- range of text to be added to document

## Table Content

### < caption >
- first descendant of < table >
- using CSS may place it elsewhere relative to < table >

### < col >
- defines columns in table
- define common semantics on common groups

### < colgroup >
- defines group of columns in table

### < table >
- tabular data
- data represented in 2D data table

### < tbody >
- groups one or more < tr > elements as the body of the table

### < td >
- defines cell of a table that contains data
- participates in table modal

### < tfoot >
- defines a set of rows summing the columns of a table

## < th >
- defines cell as header of a group of tables

## < thead >
- defines set of rows defining the head of columns of the table

## < tr >
- defines a row of cells in the table
- can be a mixture of < td > or < th >

## Forms

### < datalist >
- contains a set of < option > elements representing values available for other controls

### < fieldset >
- used to group several controls as well as < label > elements within web Forms

### < form >
- document section that contains interactive controls to submit information to a web servrer

### < input >
- creates interactive controls to accept data from user
- use type attribute

### < legend >
- a caption for content of parent < fieldset >

### < meter >
- either scalar value within known range or a fractional values

### < optgroup >
- creates grouping of options within a < select >

### < option >
- used to create a control representing an item within a < select >, < optgroup >, or a < datalist >

### < output >
- result of calculation or user action

### < progress >
- completion of a task
- typically displayed as a progress bar

### < select >
- a control that provides a menu of options

## Interactive elements

### < details >
- used as a disclosure widget from which user can retrieve additional information

### < dialog >
- dialog box or other interactive such as an inspector or window

### < menu >
- group of commands that a user can perform or activate

### < menuitem >
- command that user is able to invoke through popup menu

### < summary >
- used as a summary, caption or legend for the content of a < details > elements

## Web Component

### < shadow >
- used as a shadow DOM insertion point
- use if you created multiple shadow roots under a shadow hot-spot
- not used in ordinary HTML
- used with web components

### < slot >
- placeholder inside web component that you can fill up with own markup with effect of composing different DOM trees together

### < template >
- mechanism for holding client-side content not to be rendered when page is loaded
- may subsequently be instantiated during run-time using JavaScript
