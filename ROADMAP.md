# Brian Blocks — Project Roadmap

A step-by-step guide to building a multi-block WordPress plugin from scratch.
We go through this one step at a time. Each step has an explanation and code to type in.

---

## PHASE 1: Rename and Restructure the Plugin

### Step 1.1 — Rename the plugin folder
- Rename `copyright-date-block/` to `brian-blocks/`
- This is the root folder of your entire block library

### Step 1.2 — Rename the main PHP file
- Rename `copyright-date-block.php` to `brian-blocks.php`
- Update the plugin header inside it (Plugin Name, Description, Text Domain)
- Update the block registration function name and logic

### Step 1.3 — Rename the block source folder
- Rename `src/copyright-date-block/` to `src/copyright-date/`
- This is just tidying — shorter, cleaner folder names inside src

### Step 1.4 — Update block.json
- Update the block `name` from `copyright-date/copyright-date-block` to `brian-blocks/copyright-date`
- Update the `textdomain` to `brian-blocks`

### Step 1.5 — Update package.json
- Update the `name` field to `brian-blocks`
- Update the `description` and `author` fields

### Step 1.6 — Update index.js and edit.js text domains
- Any place that says `'copyright-date-block'` as a text domain gets updated to `'brian-blocks'`

### Step 1.7 — Build and test
- Run `npm run build`
- Activate the renamed plugin on your live site
- Confirm the Copyright Date block still works

---

## PHASE 2: Fix the Copyright Date Block

### Step 2.1 — Fix the startingYear attribute type mismatch
- In `block.json`, `startingYear` is typed as `string` but the default is a number (`2000`)
- Change the default to a string: `"2000"`

### Step 2.2 — Fix the setAttributes bug in edit.js
- Confirm `setAttributes` is properly destructured from props
- Test that changing the starting year in the sidebar actually updates the block

### Step 2.3 — Add permanent styles
- In `style.scss`, add the required CSS:
  `border: 1px solid #111111` and `padding: 5px`
- These should show in both the editor and the frontend

### Step 2.4 — Build, push, deploy and test
- Run `npm run build`
- Push to GitHub
- Pull in cPanel
- Test on live site — editor and frontend

---

## PHASE 3: Add the Skill Card Block

### Step 3.1 — Create the block folder
- Create `src/skill-card/` with empty files:
  `block.json`, `index.js`, `edit.js`, `save.js`, `style.scss`

### Step 3.2 — Write block.json
- Define block name: `brian-blocks/skill-card`
- Define attributes: `skillName` (string), `skillLevel` (string), `yearsExperience` (string)
- Set icon and category

### Step 3.3 — Write index.js
- Register the block type using metadata from block.json
- Import Edit and save

### Step 3.4 — Write edit.js
- Display the skill card in the editor
- Add InspectorControls with TextControls for each attribute
- Show a live preview of the card as the user fills it in

### Step 3.5 — Write save.js
- Output the static HTML for the frontend
- Must match the structure shown in edit.js

### Step 3.6 — Write style.scss
- Style the skill card: name, level indicator, years

### Step 3.7 — Register the new block in brian-blocks.php
- Add registration for the new block

### Step 3.8 — Build, push, deploy and test

---

## PHASE 4: Add the Project Card Block

### Step 4.1 — Create the block folder
- Create `src/project-card/` with empty files

### Step 4.2 — Write block.json
- Define block name: `brian-blocks/project-card`
- Define attributes: `projectTitle`, `projectDescription`, `projectUrl`, `projectImage` (object)

### Step 4.3 — Write index.js

### Step 4.4 — Write edit.js
- Add TextControl for title and description
- Add TextControl for project URL
- Add MediaUpload for the screenshot image
- Show live preview in editor

### Step 4.5 — Write save.js
- Output the card HTML with image, title, description, and button link

### Step 4.6 — Write style.scss
- Style the card layout

### Step 4.7 — Register and test

---

## PHASE 5: Add the Hero Block

### Step 5.1 — Create the block folder
- Create `src/hero/` with empty files

### Step 5.2 — Write block.json
- Define attributes: `heading`, `subheading`, `backgroundImage` (object), `ctaText`, `ctaUrl`

### Step 5.3 — Write edit.js
- RichText for heading and subheading (allows bold/italic inline)
- MediaUpload for background image
- TextControl for CTA button text and URL

### Step 5.4 — Write save.js

### Step 5.5 — Write style.scss

### Step 5.6 — Register and test

---

## PHASE 6: Polish and Deploy

### Step 6.1 — Review all blocks in the editor
- Make sure all blocks look correct in wp-admin
- Make sure all blocks render correctly on the frontend

### Step 6.2 — Fix any block validation errors
- If save.js output doesn't match stored content, deprecations may be needed

### Step 6.3 — Final build and deploy
- Clean production build
- Push to GitHub
- Pull to live server via cPanel

---

## Concepts You Will Learn Along the Way

| Concept | Where you learn it |
|---|---|
| Block attributes | Phase 1-2 |
| InspectorControls (sidebar UI) | Phase 2 |
| TextControl | Phase 2-3 |
| MediaUpload (image picker) | Phase 4 |
| RichText (inline editing) | Phase 5 |
| style.scss vs editor.scss | Phase 2 |
| build and deploy workflow | Every phase |
| Multi-block plugin structure | Phase 1 |

---

## Current Status
- [x] Plugin scaffolded
- [x] Copyright Date block — basic version working
- [ ] Plugin renamed to Brian Blocks
- [ ] Copyright Date block — fully fixed and styled
- [ ] Skill Card block
- [ ] Project Card block
- [ ] Hero block
