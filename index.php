<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#fff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>alwaysinvalid.9dxd.repl.co</title>
    <style>
    a {
      color: var(--link-color);
    }
    
    body {
      --background-color: #fff;
      --error-code-color: var(--google-gray-700);
      --google-blue-100: rgb(210, 227, 252);
      --google-blue-300: rgb(138, 180, 248);
      --google-blue-600: rgb(26, 115, 232);
      --google-blue-700: rgb(25, 103, 210);
      --google-gray-100: rgb(241, 243, 244);
      --google-gray-300: rgb(218, 220, 224);
      --google-gray-500: rgb(154, 160, 166);
      --google-gray-50: rgb(248, 249, 250);
      --google-gray-600: rgb(128, 134, 139);
      --google-gray-700: rgb(95, 99, 104);
      --google-gray-800: rgb(60, 64, 67);
      --google-gray-900: rgb(32, 33, 36);
      --heading-color: var(--google-gray-900);
      --link-color: rgb(88, 88, 88);
      --popup-container-background-color: rgba(0,0,0,.65);
      --primary-button-fill-color-active: var(--google-blue-700);
      --primary-button-fill-color: var(--google-blue-600);
      --primary-button-text-color: #fff;
      --quiet-background-color: rgb(247, 247, 247);
      --secondary-button-border-color: var(--google-gray-500);
      --secondary-button-fill-color: #fff;
      --secondary-button-hover-border-color: var(--google-gray-600);
      --secondary-button-hover-fill-color: var(--google-gray-50);
      --secondary-button-text-color: var(--google-gray-700);
      --small-link-color: var(--google-gray-700);
      --text-color: var(--google-gray-700);
      background: var(--background-color);
      color: var(--text-color);
      word-wrap: break-word;
    }
    
    .nav-wrapper .secondary-button {
      background: var(--secondary-button-fill-color);
      border: 1px solid var(--secondary-button-border-color);
      color: var(--secondary-button-text-color);
      float: none;
      margin: 0;
      padding: 8px 16px;
    }
    
    .hidden {
      display: none;
    }
    
    html {
      -webkit-text-size-adjust: 100%;
      font-size: 125%;
    }
    
    .icon {
      background-repeat: no-repeat;
      background-size: 100%;
    }
    
    @media (prefers-color-scheme: dark) {
      body {
        --background-color: var(--google-gray-900);
        --error-code-color: var(--google-gray-500);
        --heading-color: var(--google-gray-500);
        --link-color: var(--google-blue-300);
        --primary-button-fill-color-active: rgb(129, 162, 208);
        --primary-button-fill-color: var(--google-blue-300);
        --primary-button-text-color: var(--google-gray-900);
        --quiet-background-color: var(--background-color);
        --secondary-button-border-color: var(--google-gray-700);
        --secondary-button-fill-color: var(--google-gray-900);
        --secondary-button-hover-fill-color: rgb(48, 51, 57);
        --secondary-button-text-color: var(--google-blue-300);
        --small-link-color: var(--google-blue-300);
        --text-color: var(--google-gray-500);
      }
    }
    </style>
    <style>
    
    button {
      border: 0;
      border-radius: 20px;
      box-sizing: border-box;
      color: var(--primary-button-text-color);
      cursor: pointer;
      float: right;
      font-size: .875em;
      margin: 0;
      padding: 8px 16px;
      transition: box-shadow 150ms cubic-bezier(0.4, 0, 0.2, 1);
      user-select: none;
    }
    
    [dir='rtl'] button {
      float: left;
    }
    
    .bad-clock button,
    .captive-portal button,
    .https-only button,
    .insecure-form button,
    .lookalike-url button,
    .main-frame-blocked button,
    .neterror button,
    .pdf button,
    .ssl button,
    .enterprise-block button,
    .enterprise-warn button,
    .safe-browsing-billing button {
      background: var(--primary-button-fill-color);
    }
    
    button:active {
      background: var(--primary-button-fill-color-active);
      outline: 0;
    }
    
    #debugging {
      display: inline;
      overflow: auto;
    }
    
    .debugging-content {
      line-height: 1em;
      margin-bottom: 0;
      margin-top: 1em;
    }
    
    .debugging-content-fixed-width {
      display: block;
      font-family: monospace;
      font-size: 1.2em;
      margin-top: 0.5em;
    }
    
    .debugging-title {
      font-weight: bold;
    }
    
    #details {
      margin: 0 0 50px;
    }
    
    #details p:not(:first-of-type) {
      margin-top: 20px;
    }
    
    .secondary-button:active {
      border-color: white;
      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3),
          0 2px 6px 2px rgba(60, 64, 67, .15);
    }
    
    .secondary-button:hover {
      background: var(--secondary-button-hover-fill-color);
      border-color: var(--secondary-button-hover-border-color);
      text-decoration: none;
    }
    
    .error-code {
      color: var(--error-code-color);
      font-size: .8em;
      margin-top: 12px;
      text-transform: uppercase;
    }
    
    #error-debugging-info {
      font-size: 0.8em;
    }
    
    h1 {
      color: var(--heading-color);
      font-size: 1.6em;
      font-weight: normal;
      line-height: 1.25em;
      margin-bottom: 16px;
    }
    
    h2 {
      font-size: 1.2em;
      font-weight: normal;
    }
    
    .icon {
      height: 72px;
      margin: 0 0 40px;
      width: 72px;
    }
    
    input[type=checkbox] {
      opacity: 0;
    }
    
    input[type=checkbox]:focus ~ .checkbox::after {
      outline: -webkit-focus-ring-color auto 5px;
    }
    
    .interstitial-wrapper {
      box-sizing: border-box;
      font-size: 1em;
      line-height: 1.6em;
      margin: 14vh auto 0;
      max-width: 600px;
      width: 100%;
    }
    
    #main-message > p {
      display: inline;
    }
    
    #extended-reporting-opt-in {
      font-size: .875em;
      margin-top: 32px;
    }
    
    #extended-reporting-opt-in label {
      display: grid;
      grid-template-columns: 1.8em 1fr;
      position: relative;
    }
    
    #enhanced-protection-message {
      border-radius: 20px;
      font-size: 1em;
      margin-top: 32px;
      padding: 10px 5px;
    }
    
    #enhanced-protection-message a {
      color: var(--google-red-10);
    }
    
    #enhanced-protection-message label {
      display: grid;
      grid-template-columns: 2.5em 1fr;
      position: relative;
    }
    
    #enhanced-protection-message div {
      margin: 0.5em;
    }
    
    #enhanced-protection-message .icon {
      height: 1.5em;
      vertical-align: middle;
      width: 1.5em;
    }
    
    .nav-wrapper {
      margin-top: 51px;
    }
    
    .nav-wrapper::after {
      clear: both;
      content: '';
      display: table;
      width: 100%;
    }
    
    .small-link {
      color: var(--small-link-color);
      font-size: .875em;
    }
    
    .checkboxes {
      flex: 0 0 24px;
    }
    
    .checkbox {
      --padding: .9em;
      background: transparent;
      display: block;
      height: 1em;
      left: -1em;
      padding-inline-start: var(--padding);
      position: absolute;
      right: 0;
      top: -.5em;
      width: 1em;
    }
    
    .checkbox::after {
      border: 1px solid white;
      border-radius: 2px;
      content: '';
      height: 1em;
      left: var(--padding);
      position: absolute;
      top: var(--padding);
      width: 1em;
    }
    
    .checkbox::before {
      background: transparent;
      border: 2px solid white;
      border-inline-end-width: 0;
      border-top-width: 0;
      content: '';
      height: .2em;
      left: calc(.3em + var(--padding));
      opacity: 0;
      position: absolute;
      top: calc(.3em  + var(--padding));
      transform: rotate(-45deg);
      width: .5em;
    }
    
    input[type=checkbox]:checked ~ .checkbox::before {
      opacity: 1;
    }
    
    #recurrent-error-message {
      background: #ededed;
      border-radius: 4px;
      margin-bottom: 16px;
      margin-top: 12px;
      padding: 12px 16px;
    }
    
    .showing-recurrent-error-message #extended-reporting-opt-in {
      margin-top: 16px;
    }
    
    .showing-recurrent-error-message #enhanced-protection-message {
      margin-top: 16px;
    }
    
    @media (max-width: 700px) {
      .interstitial-wrapper {
        padding: 0 10%;
      }
    
      #error-debugging-info {
        overflow: auto;
      }
    }
    
    @media (max-width: 420px) {
      button,
      [dir='rtl'] button,
      .small-link {
        float: none;
        font-size: .825em;
        font-weight: 500;
        margin: 0;
        width: 100%;
      }
    
      button {
        padding: 16px 24px;
      }
    
      #details {
        margin: 20px 0 20px 0;
      }
    
      #details p:not(:first-of-type) {
        margin-top: 10px;
      }
    
      .secondary-button:not(.hidden) {
        display: block;
        margin-top: 20px;
        text-align: center;
        width: 100%;
      }
    
      .interstitial-wrapper {
        padding: 0 5%;
      }
    
      #extended-reporting-opt-in {
        margin-top: 24px;
      }
    
      #enhanced-protection-message {
        margin-top: 24px;
      }
    
      .nav-wrapper {
        margin-top: 30px;
      }
    }
    
    /**
     * Mobile specific styling.
     * Navigation buttons are anchored to the bottom of the screen.
     * Details message replaces the top content in its own scrollable area.
     */
    
    @media (max-width: 420px) {
      .nav-wrapper .secondary-button {
        border: 0;
        margin: 16px 0 0;
        margin-inline-end: 0;
        padding-bottom: 16px;
        padding-top: 16px;
      }
    }
    
    /* Fixed nav. */
    @media (min-width: 240px) and (max-width: 420px) and
           (min-height: 401px),
           (min-width: 421px) and (min-height: 240px) and
           (max-height: 560px) {
      body .nav-wrapper {
        background: var(--background-color);
        bottom: 0;
        box-shadow: 0 -12px 24px var(--background-color);
        left: 0;
        margin: 0 auto;
        max-width: 736px;
        padding-inline-end: 24px;
        padding-inline-start: 24px;
        position: fixed;
        right: 0;
        width: 100%;
        z-index: 2;
      }
    
      .interstitial-wrapper {
        max-width: 736px;
      }
    
      #details,
      #main-content {
        padding-bottom: 40px;
      }
    
      #details {
        padding-top: 5.5vh;
      }
    
      button.small-link {
        color: var(--google-blue-600);
      }
    }
    
    @media (max-width: 420px) and (orientation: portrait),
           (max-height: 560px) {
      body {
        margin: 0 auto;
      }
    
      button,
      [dir='rtl'] button,
      button.small-link,
      .nav-wrapper .secondary-button {
        font-family: Roboto-Regular,Helvetica;
        font-size: .933em;
        margin: 6px 0;
        transform: translatez(0);
      }
    
      .nav-wrapper {
        box-sizing: border-box;
        padding-bottom: 8px;
        width: 100%;
      }
    
      #details {
        box-sizing: border-box;
        height: auto;
        margin: 0;
        opacity: 1;
        transition: opacity 250ms cubic-bezier(0.4, 0, 0.2, 1);
      }
    
      #details.hidden,
      #main-content.hidden {
        height: 0;
        opacity: 0;
        overflow: hidden;
        padding-bottom: 0;
        transition: none;
      }
    
      h1 {
        font-size: 1.5em;
        margin-bottom: 8px;
      }
    
      .icon {
        margin-bottom: 5.69vh;
      }
    
      .interstitial-wrapper {
        box-sizing: border-box;
        margin: 7vh auto 12px;
        padding: 0 24px;
        position: relative;
      }
    
      .interstitial-wrapper p {
        font-size: .95em;
        line-height: 1.61em;
        margin-top: 8px;
      }
    
      #main-content {
        margin: 0;
        transition: opacity 100ms cubic-bezier(0.4, 0, 0.2, 1);
      }
    
      .small-link {
        border: 0;
      }
    
      .suggested-left > #control-buttons,
      .suggested-right > #control-buttons {
        float: none;
        margin: 0;
      }
    }
    
    @media (min-width: 421px) and (min-height: 500px) and (max-height: 560px) {
      .interstitial-wrapper {
        margin-top: 10vh;
      }
    }
    
    @media (min-height: 400px) and (orientation:portrait) {
      .interstitial-wrapper {
        margin-bottom: 145px;
      }
    }
    
    @media (min-height: 299px) {
      .nav-wrapper {
        padding-bottom: 16px;
      }
    }
    
    @media (max-height: 560px) and (min-height: 240px) and (orientation:landscape) {
      .extended-reporting-has-checkbox #details {
        padding-bottom: 80px;
      }
    }
    
    @media (min-height: 500px) and (max-height: 650px) and (max-width: 414px) and
           (orientation: portrait) {
      .interstitial-wrapper {
        margin-top: 7vh;
      }
    }
    
    @media (min-height: 650px) and (max-width: 414px) and (orientation: portrait) {
      .interstitial-wrapper {
        margin-top: 10vh;
      }
    }
    
    /* Small mobile screens. No fixed nav. */
    @media (max-height: 400px) and (orientation: portrait),
           (max-height: 239px) and (orientation: landscape),
           (max-width: 419px) and (max-height: 399px) {
      .interstitial-wrapper {
        display: flex;
        flex-direction: column;
        margin-bottom: 0;
      }
    
      #details {
        flex: 1 1 auto;
        order: 0;
      }
    
      #main-content {
        flex: 1 1 auto;
        order: 0;
      }
    
      .nav-wrapper {
        flex: 0 1 auto;
        margin-top: 8px;
        order: 1;
        padding-inline-end: 0;
        padding-inline-start: 0;
        position: relative;
        width: 100%;
      }
    
      button,
      .nav-wrapper .secondary-button {
        padding: 16px 24px;
      }
    
      button.small-link {
        color: var(--google-blue-600);
      }
    }
    
    @media (max-width: 239px) and (orientation: portrait) {
      .nav-wrapper {
        padding-inline-end: 0;
        padding-inline-start: 0;
      }
    }
    </style>
    <style>
    
    /* Don't use the main frame div when the error is in a subframe. */
    html[subframe] #main-frame-error {
      display: none;
    }
    
    /* Don't use the subframe error div when the error is in a main frame. */
    html:not([subframe]) #sub-frame-error {
      display: none;
    }
    
    h1 {
      margin-top: 0;
      word-wrap: break-word;
    }
    
    h1 span {
      font-weight: 500;
    }
    
    a {
      text-decoration: none;
    }
    
    .icon {
      -webkit-user-select: none;
      display: inline-block;
    }
    
    .icon-generic {
      /* Can't access chrome://theme/IDR_ERROR_NETWORK_GENERIC from an untrusted
       * renderer process, so embed the resource manually. */
      content: -webkit-image-set(
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABIAQMAAABvIyEEAAAABlBMVEUAAABTU1OoaSf/AAAAAXRSTlMAQObYZgAAAENJREFUeF7tzbEJACEQRNGBLeAasBCza2lLEGx0CxFGG9hBMDDxRy/72O9FMnIFapGylsu1fgoBdkXfUHLrQgdfrlJN1BdYBjQQm3UAAAAASUVORK5CYII=) 1x,
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQAQMAAADdiHD7AAAABlBMVEUAAABTU1OoaSf/AAAAAXRSTlMAQObYZgAAAFJJREFUeF7t0cENgDAMQ9FwYgxG6WjpaIzCCAxQxVggFuDiCvlLOeRdHR9yzjncHVoq3npu+wQUrUuJHylSTmBaespJyJQoObUeyxDQb3bEm5Au81c0pSCD8HYAAAAASUVORK5CYII=) 2x);
    }
    
    .icon-info {
      content: -webkit-image-set(
          url(data:image/png;base64,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) 1x,
          url(data:image/png;base64,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) 2x);
    }
    
    .icon-offline {
      content: -webkit-image-set(
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABIAQMAAABvIyEEAAAABlBMVEUAAABTU1OoaSf/AAAAAXRSTlMAQObYZgAAAGxJREFUeF7tyMEJwkAQRuFf5ipMKxYQiJ3Z2nSwrWwBA0+DQZcdxEOueaePp9+dQZFB7GpUcURSVU66yVNFj6LFICatThZB6r/ko/pbRpUgilY0Cbw5sNmb9txGXUKyuH7eV25x39DtJXUNPQGJtWFV+BT/QAAAAABJRU5ErkJggg==) 1x,
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQBAMAAAAVaP+LAAAAGFBMVEUAAABTU1NNTU1TU1NPT09SUlJSUlJTU1O8B7DEAAAAB3RSTlMAoArVKvVgBuEdKgAAAJ1JREFUeF7t1TEOwyAMQNG0Q6/UE+RMXD9d/tC6womIFSL9P+MnAYOXeTIzMzMzMzMzaz8J9Ri6HoITmuHXhISE8nEh9yxDh55aCEUoTGbbQwjqHwIkRAEiIaG0+0AA9VBMaE89Rogeoww936MQrWdBr4GN/z0IAdQ6nQ/FIpRXDwHcA+JIJcQowQAlFUA0MfQpXLlVQfkzR4igS6ENjknm/wiaGhsAAAAASUVORK5CYII=) 2x);
      position: relative;
    }
    
    .icon-disabled {
      content: -webkit-image-set(
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHAAAABICAMAAAAZF4G5AAAABlBMVEVMaXFTU1OXUj8tAAAAAXRSTlMAQObYZgAAASZJREFUeAHd11Fq7jAMRGGf/W/6PoWB67YMqv5DybwG/CFjRuR8JBw3+ByiRjgV9W/TJ31P0tBfC6+cj1haUFXKHmVJo5wP98WwQ0ZCbfUc6LQ6VuUBz31ikADkLMkDrfUC4rR6QGW+gF6rx7NaHWCj1Y/W6lf4L7utvgBSt3rBFSS/XBMPUILcJINHCBWYUfpWn4NBi1ZfudIc3rf6/NGEvEA+AsYTJozmXemjXeLZAov+mnkN2HfzXpMSVQDnGw++57qNJ4D1xitA2sJ+VAWMygSEaYf2mYPTjZfk2K8wmP7HLIH5Mg4/pP+PEcDzUvDMvYbs/2NWwPO5vBdMZE4EE5UTQLiBFDaUlTDPBRoJ9HdAYIkIo06og3BNXtCzy7zA1aXk5x+tJARq63eAygAAAABJRU5ErkJggg==) 1x,
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAACQAQMAAAArwfVjAAAABlBMVEVMaXFTU1OXUj8tAAAAAXRSTlMAQObYZgAAAYdJREFUeF7F1EFqwzAUBNARAmVj0FZe5QoBH6BX+dn4GlY2PYNzGx/A0CvkCIJuvIraKJKbgBvzf2g62weDGD7CYggpfFReis4J0ey9EGFIiEQQojFSlA9kSIiqd0KkFjKsewgRbStEN19mxUPTtmW9HQ/h6tyqNQ8NlSMZdzyE6qkoE0trVYGFm0n1WYeBhduzwbwBC7voS+vIxfeMjeaiLxsMMtQNwMPtuew+DjzcTHk8YMfDknEcIUOtf2lVfgVH3K4Xv5PRYAXRVMtItIJ3rfaCIVn9DsTH2NxisAVRex2Hh3hX+/mRUR08bAwPEYsI51ZxWH4Q0SpicQRXeyEaIug48FEdegARfMz/tADVsRciwTAxW308ehmC2gLraC+YCbV3QoTZexa+zegAEW5PhhgYfmbvJgcRqngGByOSXdFJcLk2JeDPEN0kxe1JhIt5FiFA+w+ItMELsUyPF2IaJ4aILqb4FbxPwhImwj6JauKgDUCYaxmYIsd4KXdMjIC9ItB5Bn4BNRwsG0XM2nwAAAAASUVORK5CYII=) 2x);
      width: 112px;
    }
    
    .hidden {
      display: none;
    }
    
    #suggestions-list a {
      color: var(--google-blue-600);
    }
    
    #suggestions-list p {
      margin-block-end: 0;
    }
    
    #suggestions-list ul {
      margin-top: 0;
    }
    
    .single-suggestion {
      list-style-type: none;
      padding-inline-start: 0;
    }
    
    #error-information-button {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTExIDE4aDJ2LTJoLTJ2MnptMS0xNkM2LjQ4IDIgMiA2LjQ4IDIgMTJzNC40OCAxMCAxMCAxMCAxMC00LjQ4IDEwLTEwUzE3LjUyIDIgMTIgMnptMCAxOGMtNC40MSAwLTgtMy41OS04LThzMy41OS04IDgtOCA4IDMuNTkgOCA4LTMuNTkgOC04IDh6bTAtMTRjLTIuMjEgMC00IDEuNzktNCA0aDJjMC0xLjEuOS0yIDItMnMyIC45IDIgMmMwIDItMyAxLjc1LTMgNWgyYzAtMi4yNSAzLTIuNSAzLTUgMC0yLjIxLTEuNzktNC00LTR6Ii8+PC9zdmc+);
      height: 24px;
      vertical-align: -.15em;
      width: 24px;
    }
    
    .use-popup-container#error-information-popup-container
      #error-information-popup {
      align-items: center;
      background-color: var(--popup-container-background-color);
      display: flex;
      height: 100%;
      left: 0;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 100;
    }
    
    .use-popup-container#error-information-popup-container
      #error-information-popup-content > p {
      margin-bottom: 11px;
      margin-inline-start: 20px;
    }
    
    .use-popup-container#error-information-popup-container #suggestions-list ul {
      margin-inline-start: 15px;
    }
    
    .use-popup-container#error-information-popup-container
      #error-information-popup-box {
      background-color: var(--background-color);
      left: 5%;
      padding-bottom: 15px;
      padding-top: 15px;
      position: fixed;
      width: 90%;
      z-index: 101;
    }
    
    .use-popup-container#error-information-popup-container div.error-code {
      margin-inline-start: 20px;
    }
    
    .use-popup-container#error-information-popup-container #suggestions-list p {
      margin-inline-start: 20px;
    }
    
    :not(.use-popup-container)#error-information-popup-container
      #error-information-popup-close {
      display: none;
    }
    
    #error-information-popup-close {
      margin-bottom: 0;
      margin-inline-end: 35px;
      margin-top: 15px;
      text-align: end;
    }
    
    .link-button {
      color: rgb(66, 133, 244);
      display: inline-block;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    #sub-frame-error-details {
    
      color: #8F8F8F;
    
      /* Not done on mobile for performance reasons. */
      text-shadow: 0 1px 0 rgba(255,255,255,0.3);
    
    }
    
    [jscontent=hostName],
    [jscontent=failedUrl] {
      overflow-wrap: break-word;
    }
    
    .secondary-button {
      background: #d9d9d9;
      color: #696969;
      margin-inline-end: 16px;
    }
    
    .snackbar {
      background: #323232;
      border-radius: 2px;
      bottom: 24px;
      box-sizing: border-box;
      color: #fff;
      font-size: .87em;
      left: 24px;
      max-width: 568px;
      min-width: 288px;
      opacity: 0;
      padding: 16px 24px 12px;
      position: fixed;
      transform: translateY(90px);
      will-change: opacity, transform;
      z-index: 999;
    }
    
    .snackbar-show {
      -webkit-animation:
        show-snackbar 250ms cubic-bezier(0, 0, 0.2, 1) forwards,
        hide-snackbar 250ms cubic-bezier(0.4, 0, 1, 1) forwards 5s;
    }
    
    @-webkit-keyframes show-snackbar {
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @-webkit-keyframes hide-snackbar {
      0% {
        opacity: 1;
        transform: translateY(0);
      }
      100% {
        opacity: 0;
        transform: translateY(90px);
      }
    }
    
    .suggestions {
      margin-top: 18px;
    }
    
    .suggestion-header {
      font-weight: bold;
      margin-bottom: 4px;
    }
    
    .suggestion-body {
      color: #777;
    }
    
    /* Decrease padding at low sizes. */
    @media (max-width: 640px), (max-height: 640px) {
      h1 {
        margin: 0 0 15px;
      }
      .suggestions {
        margin-top: 10px;
      }
      .suggestion-header {
        margin-bottom: 0;
      }
    }
    
    #download-link,
    #download-link-clicked {
      margin-bottom: 30px;
      margin-top: 30px;
    }
    
    #download-link-clicked {
      color: #BBB;
    }
    
    #download-link::before,
    #download-link-clicked::before {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxLjJlbSIgaGVpZ2h0PSIxLjJlbSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNNSAyMGgxNHYtMkg1bTE0LTloLTRWM0g5djZINWw3IDcgNy03eiIgZmlsbD0iIzQyODVGNCIvPjwvc3ZnPg==);
      display: inline-block;
      margin-inline-end: 4px;
      vertical-align: -webkit-baseline-middle;
    }
    
    #download-link-clicked::before {
      opacity: 0;
      width: 0;
    }
    
    #offline-content-list-visibility-card {
      border: 1px solid white;
      border-radius: 8px;
      display: flex;
      font-size: .8em;
      justify-content: space-between;
      line-height: 1;
    }
    
    #offline-content-list.list-hidden #offline-content-list-visibility-card {
      border-color: rgb(218, 220, 224);
    }
    
    #offline-content-list-visibility-card > div {
      padding: 1em;
    }
    
    #offline-content-list-title {
      color: var(--google-gray-700);
    }
    
    #offline-content-list-show-text,
    #offline-content-list-hide-text {
      color: rgb(66, 133, 244);
    }
    
    /* Hides the "hide" text div when the offline content list is collapsed/hidden
     * and, alternatively, hides the "show" text div when the offline content list
     * is expanded/shown.
     */
    #offline-content-list.list-hidden #offline-content-list-hide-text,
    #offline-content-list:not(.list-hidden) #offline-content-list-show-text {
      display: none;
    }
    
    /* Controls the animation of the offline content list when it is expanded/shown.
     */
    #offline-content-suggestions {
      /* Max-height has to be set for the height animation to work. The chosen value
       * is a little greater than the maximum height the list will have, when all
       * suggestions have images, so that it is never clamped. This makes so that
       * when the actual height is smaller then the animation is not as smooth.
       */
      max-height: 27em;
      transition: max-height 200ms ease-in, visibility 0s 200ms,
                  opacity 200ms 200ms linear;
    }
    
    /* Controls the animation of the offline content list when it is
     * collapsed/hidden.
     */
    #offline-content-list.list-hidden #offline-content-suggestions {
      max-height: 0;
      opacity: 0;
      transition: opacity 200ms linear, visibility 0s 200ms,
                  max-height 200ms 200ms ease-out;
      visibility: hidden;
    }
    
    #offline-content-list {
      margin-inline-start: -5%;
      width: 110%;
    }
    
    /* The selectors below adjust the "overflow" of the suggestion cards contents
     * based on the same screen size based strategy used for the main frame, which
     * is applied by the `interstitial-wrapper` class. */
    @media (max-width: 420px)  {
      #offline-content-list {
        margin-inline-start: -2.5%;
        width: 105%;
      }
    }
    @media (max-width: 420px) and (orientation: portrait),
           (max-height: 560px) {
      #offline-content-list {
        margin-inline-start: -12px;
        width: calc(100% + 24px);
      }
    }
    
    .suggestion-with-image .offline-content-suggestion-thumbnail {
      flex-basis: 8.2em;
      flex-shrink: 0;
    }
    
    .suggestion-with-image .offline-content-suggestion-thumbnail > img {
      height: 100%;
      width: 100%;
    }
    
    .suggestion-with-image #offline-content-list:not(.is-rtl)
    .offline-content-suggestion-thumbnail > img {
      border-bottom-right-radius: 7px;
      border-top-right-radius: 7px;
    }
    
    .suggestion-with-image #offline-content-list.is-rtl
    .offline-content-suggestion-thumbnail > img {
      border-bottom-left-radius: 7px;
      border-top-left-radius: 7px;
    }
    
    .suggestion-with-icon .offline-content-suggestion-thumbnail {
      align-items: center;
      display: flex;
      justify-content: center;
      min-height: 4.2em;
      min-width: 4.2em;
    }
    
    .suggestion-with-icon .offline-content-suggestion-thumbnail > div {
      align-items: center;
      background-color: rgb(241, 243, 244);
      border-radius: 50%;
      display: flex;
      height: 2.3em;
      justify-content: center;
      width: 2.3em;
    }
    
    .suggestion-with-icon .offline-content-suggestion-thumbnail > div > img {
      height: 1.45em;
      width: 1.45em;
    }
    
    .offline-content-suggestion-favicon {
      height: 1em;
      margin-inline-end: 0.4em;
      width: 1.4em;
    }
    
    .offline-content-suggestion-favicon > img {
      height: 1.4em;
      width: 1.4em;
    }
    
    .no-favicon .offline-content-suggestion-favicon {
      display: none;
    }
    
    .image-video {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTcgMTAuNVY3YTEgMSAwIDAgMC0xLTFINGExIDEgMCAwIDAtMSAxdjEwYTEgMSAwIDAgMCAxIDFoMTJhMSAxIDAgMCAwIDEtMXYtMy41bDQgNHYtMTFsLTQgNHoiIGZpbGw9IiMzQzQwNDMiLz48L3N2Zz4=);
    }
    
    .image-music-note {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgM3Y5LjI2Yy0uNS0uMTctMS0uMjYtMS41LS4yNkM4IDEyIDYgMTQgNiAxNi41UzggMjEgMTAuNSAyMXM0LjUtMiA0LjUtNC41VjZoNFYzaC03eiIgZmlsbD0iIzNDNDA0MyIvPjwvc3ZnPg==);
    }
    
    .image-earth {
      content: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTIgMmM1LjUyIDAgMTAgNC40OCAxMCAxMHMtNC40OCAxMC0xMCAxMFMyIDE3LjUyIDIgMTIgNi40OCAyIDEyIDJ6TTQgMTJoNC40YzMuNDA3LjAyMiA0LjkyMiAxLjczIDQuNTQzIDUuMTI3SDkuNDg4djIuNDdhOC4wMDQgOC4wMDQgMCAwIDAgMTAuNDk4LTguMDgzQzE5LjMyNyAxMi41MDQgMTguMzMyIDEzIDE3IDEzYy0yLjEzNyAwLTMuMjA2LS45MTYtMy4yMDYtMi43NWgtMy43NDhjLS4yNzQtMi43MjguNjgzLTQuMDkyIDIuODctNC4wOTIgMC0uOTc1LjMyNy0xLjU5Ny44MTEtMS45N0E4LjAwNCA4LjAwNCAwIDAgMCA0IDEyeiIgZmlsbD0iIzNDNDA0MyIvPjwvc3ZnPg==);
    }
    
    .image-file {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTMgOVYzLjVMMTguNSA5TTYgMmMtMS4xMSAwLTIgLjg5LTIgMnYxNmEyIDIgMCAwIDAgMiAyaDEyYTIgMiAwIDAgMCAyLTJWOGwtNi02SDZ6IiBmaWxsPSIjM0M0MDQzIi8+PC9zdmc+);
    }
    
    .offline-content-suggestion-texts {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      line-height: 1.3;
      padding: .9em;
      width: 100%;
    }
    
    .offline-content-suggestion-title {
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 3;
      color: rgb(32, 33, 36);
      display: -webkit-box;
      font-size: 1.1em;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    
    div.offline-content-suggestion {
      align-items: stretch;
      border: 1px solid rgb(218, 220, 224);
      border-radius: 8px;
      display: flex;
      justify-content: space-between;
      margin-bottom: .8em;
    }
    
    .suggestion-with-image {
      flex-direction: row;
      height: 8.2em;
      max-height: 8.2em;
    }
    
    .suggestion-with-icon {
      flex-direction: row-reverse;
      height: 4.2em;
      max-height: 4.2em;
    }
    
    .suggestion-with-icon .offline-content-suggestion-title {
      -webkit-line-clamp: 1;
      word-break: break-all;
    }
    
    .suggestion-with-icon .offline-content-suggestion-texts {
      padding-inline-start: 0;
    }
    
    .offline-content-suggestion-attribution-freshness {
      color: rgb(95, 99, 104);
      display: flex;
      font-size: .8em;
      line-height: 1.7em;
    }
    
    .offline-content-suggestion-attribution {
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 1;
      display: -webkit-box;
      flex-shrink: 1;
      margin-inline-end: 0.3em;
      overflow: hidden;
      overflow-wrap: break-word;
      text-overflow: ellipsis;
      word-break: break-all;
    }
    
    .no-attribution .offline-content-suggestion-attribution {
      display: none;
    }
    
    .offline-content-suggestion-freshness::before {
      content: '-';
      display: inline-block;
      flex-shrink: 0;
      margin-inline-end: .1em;
      margin-inline-start: .1em;
    }
    
    .no-attribution .offline-content-suggestion-freshness::before {
      display: none;
    }
    
    .offline-content-suggestion-freshness {
      flex-shrink: 0;
    }
    
    .suggestion-with-image .offline-content-suggestion-pin-spacer {
      flex-grow: 100;
      flex-shrink: 1;
    }
    
    .suggestion-with-image .offline-content-suggestion-pin {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik0wIDBoMjR2MjRIMFYweiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9ImIiPjx1c2UgeGxpbms6aHJlZj0iI2EiIG92ZXJmbG93PSJ2aXNpYmxlIi8+PC9jbGlwUGF0aD48cGF0aCBjbGlwLXBhdGg9InVybCgjYikiIGQ9Ik0xMiAyQzYuNSAyIDIgNi41IDIgMTJzNC41IDEwIDEwIDEwIDEwLTQuNSAxMC0xMFMxNy41IDIgMTIgMnptNSAxNkg3di0yaDEwdjJ6bS02LjctNEw3IDEwLjdsMS40LTEuNCAxLjkgMS45IDUuMy01LjNMMTcgNy4zIDEwLjMgMTR6IiBmaWxsPSIjOUFBMEE2Ii8+PC9zdmc+);
      flex-shrink: 0;
      height: 1.4em;
      margin-inline-start: .4em;
      width: 1.4em;
    }
    
    /* Controls the animation (and a bit more) of the launch-downloads-home action
     * button when the offline content list is expanded/shown.
     */
    #offline-content-list-action {
      text-align: center;
      transition: visibility 0s 200ms, opacity 200ms 200ms linear;
    }
    
    /* Controls the animation of the launch-downloads-home action button when the
     * offline content list is collapsed/hidden.
     */
    #offline-content-list.list-hidden #offline-content-list-action {
      opacity: 0;
      transition: opacity 200ms linear, visibility 0s 200ms;
      visibility: hidden;
    }
    
    #cancel-save-page-button {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ij48Y2xpcFBhdGggaWQ9Im1hc2siPjxwYXRoIGQ9Ik0xMiAyQzYuNSAyIDIgNi41IDIgMTJzNC41IDEwIDEwIDEwIDEwLTQuNSAxMC0xMFMxNy41IDIgMTIgMnptNSAxNkg3di0yaDEwdjJ6bS02LjctNEw3IDEwLjdsMS40LTEuNCAxLjkgMS45IDUuMy01LjNMMTcgNy4zIDEwLjMgMTR6IiBmaWxsPSIjOUFBMEE2Ii8+PC9jbGlwUGF0aD48cGF0aCBjbGlwLXBhdGg9InVybCgjbWFzaykiIGZpbGw9IiM5QUEwQTYiIGQ9Ik0wIDBoMjR2MjRIMHoiLz48cGF0aCBjbGlwLXBhdGg9InVybCgjbWFzaykiIGZpbGw9IiMxQTczRTgiIHN0eWxlPSJhbmltYXRpb246b2ZmbGluZUFuaW1hdGlvbiA0cyBpbmZpbml0ZSIgZD0iTTAgMGgyNHYyNEgweiIvPjxzdHlsZT5Aa2V5ZnJhbWVzIG9mZmxpbmVBbmltYXRpb257MCUsMzUle2hlaWdodDowfTYwJXtoZWlnaHQ6MTAwJX05MCV7ZmlsbC1vcGFjaXR5OjF9dG97ZmlsbC1vcGFjaXR5OjB9fTwvc3R5bGU+PC9zdmc+);
      background-position: right 27px center;
      background-repeat: no-repeat;
      border: 1px solid var(--google-gray-300);
      border-radius: 5px;
      color: var(--google-gray-700);
      margin-bottom: 26px;
      padding-bottom: 16px;
      padding-inline-end: 88px;
      padding-inline-start: 16px;
      padding-top: 16px;
      text-align: start;
    }
    
    html[dir='rtl'] #cancel-save-page-button {
      background-position: left 27px center;
    }
    
    #save-page-for-later-button {
      display: flex;
      justify-content: start;
    }
    
    #save-page-for-later-button a::before {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxLjJlbSIgaGVpZ2h0PSIxLjJlbSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNNSAyMGgxNHYtMkg1bTE0LTloLTRWM0g5djZINWw3IDcgNy03eiIgZmlsbD0iIzQyODVGNCIvPjwvc3ZnPg==);
      display: inline-block;
      margin-inline-end: 4px;
      vertical-align: -webkit-baseline-middle;
    }
    
    .hidden#save-page-for-later-button {
      display: none;
    }
    
    /* Don't allow overflow when in a subframe. */
    html[subframe] body {
      overflow: hidden;
    }
    
    #sub-frame-error {
      -webkit-align-items: center;
      -webkit-flex-flow: column;
      -webkit-justify-content: center;
      background-color: #DDD;
      display: -webkit-flex;
      height: 100%;
      left: 0;
      position: absolute;
      text-align: center;
      top: 0;
      transition: background-color 200ms ease-in-out;
      width: 100%;
    }
    
    #sub-frame-error:hover {
      background-color: #EEE;
    }
    
    #sub-frame-error .icon-generic {
      margin: 0 0 16px;
    }
    
    #sub-frame-error-details {
      margin: 0 10px;
      text-align: center;
      visibility: hidden;
    }
    
    /* Show details only when hovering. */
    #sub-frame-error:hover #sub-frame-error-details {
      visibility: visible;
    }
    
    /* If the iframe is too small, always hide the error code. */
    /* TODO(mmenke): See if overflow: no-display works better, once supported. */
    @media (max-width: 200px), (max-height: 95px) {
      #sub-frame-error-details {
        display: none;
      }
    }
    
    /* Adjust icon for small embedded frames in apps. */
    @media (max-height: 100px) {
      #sub-frame-error .icon-generic {
        height: auto;
        margin: 0;
        padding-top: 0;
        width: 25px;
      }
    }
    
    /* details-button is special; it's a <button> element that looks like a link. */
    #details-button {
      box-shadow: none;
      min-width: 0;
    }
    
    /* Styles for platform dependent separation of controls and details button. */
    .suggested-left > #control-buttons,
    .suggested-right > #details-button {
      float: left;
    }
    
    .suggested-right > #control-buttons,
    .suggested-left > #details-button {
      float: right;
    }
    
    .suggested-left .secondary-button {
      margin-inline-end: 0;
      margin-inline-start: 16px;
    }
    
    #details-button.singular {
      float: none;
    }
    
    /* download-button shows both icon and text. */
    #download-button {
      padding-bottom: 4px;
      padding-top: 4px;
      position: relative;
    }
    
    #download-button::before {
      background: -webkit-image-set(
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAAO0lEQVQ4y2NgGArgPxIY1YChsOE/LtBAmpYG0mxpIOSDBpKUo2lpIDZxNJCkHKqlYZAla3RAHQ1DFgAARRroHyLNTwwAAAAASUVORK5CYII=) 1x,
          url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAAZElEQVRYw+3Ruw3AMAwDUY3OzZUmRRD4E9iim9wNwAdbEURHyk4AAAAATiCVK8lLyPsKeT9K3lsownnunfkPxO78hKiYHxBV8x2icr5BVM+/CMf8g3DN34Rzns6ViwHUAUQ/6wIAd5Km7l6c8AAAAABJRU5ErkJggg==) 2x)
        no-repeat;
      content: '';
      display: inline-block;
      height: 24px;
      margin-inline-end: 4px;
      margin-inline-start: -4px;
      vertical-align: middle;
      width: 24px;
    }
    
    #download-button:disabled {
      background: rgb(180, 206, 249);
      color: rgb(255, 255, 255);
    }
    
    #buttons::after {
      clear: both;
      content: '';
      display: block;
      width: 100%;
    }
    
    /* Offline page */
    html[dir='rtl'] .runner-container,
    html[dir='rtl'].offline .icon-offline {
      transform: scaleX(-1);
    }
    
    .offline {
      transition: filter 1.5s cubic-bezier(0.65, 0.05, 0.36, 1),
                  background-color 1.5s cubic-bezier(0.65, 0.05, 0.36, 1);
    
      will-change: filter, background-color;
    
    }
    
    .offline body {
      transition: background-color 1.5s cubic-bezier(0.65, 0.05, 0.36, 1);
    }
    
    .offline #main-message > p {
      display: none;
    }
    
    .offline.inverted {
      background-color: #fff;
      filter: invert(1);
    }
    
    .offline.inverted body {
      background-color: #fff;
    }
    
    .offline .interstitial-wrapper {
      color: var(--text-color);
      font-size: 1em;
      line-height: 1.55;
      margin: 0 auto;
      max-width: 600px;
      padding-top: 100px;
      position: relative;
      width: 100%;
    }
    
    .offline .runner-container {
      direction: ltr;
      height: 150px;
      max-width: 600px;
      overflow: hidden;
      position: absolute;
      top: 35px;
      width: 44px;
    }
    
    .offline .runner-container:focus {
      outline: none;
    }
    
    .offline .runner-container:focus-visible {
      outline: 3px solid var(--google-blue-300);
    }
    
    .offline .runner-canvas {
      height: 150px;
      max-width: 600px;
      opacity: 1;
      overflow: hidden;
      position: absolute;
      top: 0;
      z-index: 10;
    }
    
    .offline .controller {
      height: 100vh;
      left: 0;
      position: absolute;
      top: 0;
      width: 100vw;
      z-index: 9;
    }
    
    #offline-resources {
      display: none;
    }
    
    #offline-instruction {
      image-rendering: pixelated;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 60px;
      width: fit-content;
    }
    
    .offline-runner-live-region {
      bottom: 0;
      clip-path: polygon(0 0, 0 0, 0 0);
      color: var(--background-color);
      display: block;
      font-size: xx-small;
      overflow: hidden;
      position: absolute;
      text-align: center;
      transition: color 1.5s cubic-bezier(0.65, 0.05, 0.36, 1);
      user-select: none;
    }
    
    /* Custom toggle */
    .slow-speed-option {
      align-items: center;
      background: var(--google-gray-50);
      border-radius: 24px/50%;
      bottom: 0;
      color: var(--error-code-color);
      display: inline-flex;
      font-size: 1em;
      left: 0;
      line-height: 1.1em;
      margin: 5px auto;
      padding: 2px 12px 3px 20px;
      position: absolute;
      right: 0;
      width: max-content;
      z-index: 999;
    }
    
    .slow-speed-option.hidden {
      display: none;
    }
    
    .slow-speed-option [type=checkbox] {
      opacity: 0;
      pointer-events: none;
      position: absolute;
    }
    
    .slow-speed-option .slow-speed-toggle {
      cursor: pointer;
      margin-inline-start: 8px;
      padding: 8px 4px;
      position: relative;
    }
    
    .slow-speed-option [type=checkbox]:disabled ~ .slow-speed-toggle {
      cursor: default;
    }
    
    .slow-speed-option-label [type=checkbox] {
      opacity: 0;
      pointer-events: none;
      position: absolute;
    }
    
    .slow-speed-option .slow-speed-toggle::before,
    .slow-speed-option .slow-speed-toggle::after {
      content: '';
      display: block;
      margin: 0 3px;
      transition: all 100ms cubic-bezier(0.4, 0, 1, 1);
    }
    
    .slow-speed-option .slow-speed-toggle::before {
      background: rgb(189,193,198);
      border-radius: 0.65em;
      height: 0.9em;
      width: 2em;
    }
    
    .slow-speed-option .slow-speed-toggle::after {
      background: #fff;
      border-radius: 50%;
      box-shadow: 0 1px 3px 0 rgb(0 0 0 / 40%);
      height: 1.2em;
      position: absolute;
      top: 51%;
      transform: translate(-20%, -50%);
      width: 1.1em;
    }
    
    .slow-speed-option [type=checkbox]:focus + .slow-speed-toggle {
      box-shadow: 0 0 8px rgb(94, 158, 214);
      outline: 1px solid rgb(93, 157, 213);
    }
    
    .slow-speed-option [type=checkbox]:checked + .slow-speed-toggle::before {
      background: var(--google-blue-600);
      opacity: 0.5;
    }
    
    .slow-speed-option [type=checkbox]:checked + .slow-speed-toggle::after {
      background: var(--google-blue-600);
      transform: translate(calc(2em - 90%), -50%);
    }
    
    .slow-speed-option [type=checkbox]:checked:disabled +
      .slow-speed-toggle::before {
      background: rgb(189,193,198);
    }
    
    .slow-speed-option [type=checkbox]:checked:disabled +
      .slow-speed-toggle::after {
      background: var(--google-gray-50);
    }
    
    @media (max-width: 420px) {
      #download-button {
        padding-bottom: 12px;
        padding-top: 12px;
      }
    
      .suggested-left > #control-buttons,
      .suggested-right > #control-buttons {
        float: none;
      }
    
      .snackbar {
        border-radius: 0;
        bottom: 0;
        left: 0;
        width: 100%;
      }
    }
    
    @media (max-height: 350px) {
      h1 {
        margin: 0 0 15px;
      }
    
      .icon-offline {
        margin: 0 0 10px;
      }
    
      .interstitial-wrapper {
        margin-top: 5%;
      }
    
      .nav-wrapper {
        margin-top: 30px;
      }
    }
    
    @media (min-width: 420px) and (max-width: 736px) and
           (min-height: 240px) and (max-height: 420px) and
           (orientation:landscape) {
      .interstitial-wrapper {
        margin-bottom: 100px;
      }
    }
    
    @media (max-width: 360px) and (max-height: 480px) {
      .offline .interstitial-wrapper {
        padding-top: 60px;
      }
    
      .offline .runner-container {
        top: 8px;
      }
    }
    
    @media (min-height: 240px) and (orientation: landscape) {
      .offline .interstitial-wrapper {
        margin-bottom: 90px;
      }
    
      .icon-offline {
        margin-bottom: 20px;
      }
    }
    
    @media (max-height: 320px) and (orientation: landscape) {
      .icon-offline {
        margin-bottom: 0;
      }
    
      .offline .runner-container {
        top: 10px;
      }
    }
    
    @media (max-width: 240px) {
      button {
        padding-inline-end: 12px;
        padding-inline-start: 12px;
      }
    
      .interstitial-wrapper {
        overflow: inherit;
        padding: 0 8px;
      }
    }
    
    @media (max-width: 120px) {
      button {
        width: auto;
      }
    }
    
    .arcade-mode,
    .arcade-mode .runner-container,
    .arcade-mode .runner-canvas {
      image-rendering: pixelated;
      max-width: 100%;
      overflow: hidden;
    }
    
    .arcade-mode #buttons,
    .arcade-mode #main-content {
      opacity: 0;
      overflow: hidden;
    }
    
    .arcade-mode .interstitial-wrapper {
      height: 100vh;
      max-width: 100%;
      overflow: hidden;
    }
    
    .arcade-mode .runner-container {
      left: 0;
      margin: auto;
      right: 0;
      transform-origin: top center;
      transition: transform 250ms cubic-bezier(0.4, 0, 1, 1) 400ms;
      z-index: 2;
    }
    
    @media (prefers-color-scheme: dark) {
      .icon {
        filter: invert(1);
      }
    
      .offline .runner-canvas {
        filter: invert(1);
      }
    
      .offline.inverted {
        background-color: var(--background-color);
        filter: invert(0);
      }
    
      .offline.inverted body {
        background-color: #fff;
      }
    
      .offline.inverted .offline-runner-live-region {
        color: #fff;
      }
    
      #suggestions-list a {
        color: var(--link-color);
      }
    
      #error-information-button {
        filter: invert(0.6);
      }
    
      .slow-speed-option {
        background: var(--google-gray-800);
        color: var(--google-gray-100);
      }
    
      .slow-speed-option .slow-speed-toggle::before,
      .slow-speed-option [type=checkbox]:checked:disabled +
        .slow-speed-toggle::before {
         background: rgb(189,193,198);
      }
    
      .slow-speed-option [type=checkbox]:checked + .slow-speed-toggle::after,
      .slow-speed-option [type=checkbox]:checked + .slow-speed-toggle::before {
        background: var(--google-blue-300);
      }
    }
    </style>
    <script>
  
      /**
       * @typedef {{
       *   downloadButtonClick: function(),
       *   reloadButtonClick: function(string),
       *   detailsButtonClick: function(),
       *   diagnoseErrorsButtonClick: function(),
       *   portalSigninsButtonClick: function(),
       *   trackEasterEgg: function(),
       *   updateEasterEggHighScore: function(number),
       *   resetEasterEggHighScore: function(),
       *   launchOfflineItem: function(string, string),
       *   savePageForLater: function(),
       *   cancelSavePage: function(),
       *   listVisibilityChange: function(boolean),
       * }}
       */
      // eslint-disable-next-line no-var
      var errorPageController;
      
      const HIDDEN_CLASS = 'hidden';
      
      // Decodes a UTF16 string that is encoded as base64.
      function decodeUTF16Base64ToString(encoded_text) {
        const data = atob(encoded_text);
        let result = '';
        for (let i = 0; i < data.length; i += 2) {
          result +=
              String.fromCharCode(data.charCodeAt(i) * 256 + data.charCodeAt(i + 1));
        }
        return result;
      }
      
      function toggleHelpBox() {
        const helpBoxOuter = document.getElementById('details');
        helpBoxOuter.classList.toggle(HIDDEN_CLASS);
        const detailsButton = document.getElementById('details-button');
        if (helpBoxOuter.classList.contains(HIDDEN_CLASS)) {
          /** @suppress {missingProperties} */
          detailsButton.innerText = detailsButton.detailsText;
        } else {
          /** @suppress {missingProperties} */
          detailsButton.innerText = detailsButton.hideDetailsText;
        }
      
        // Details appears over the main content on small screens.
        if (mobileNav) {
          document.getElementById('main-content').classList.toggle(HIDDEN_CLASS);
          const runnerContainer = document.querySelector('.runner-container');
          if (runnerContainer) {
            runnerContainer.classList.toggle(HIDDEN_CLASS);
          }
        }
      }
      
      function diagnoseErrors() {
        if (window.errorPageController) {
          errorPageController.diagnoseErrorsButtonClick();
        }
      }
      
      function portalSignin() {
        if (window.errorPageController) {
          errorPageController.portalSigninButtonClick();
        }
      }
      
      // Subframes use a different layout but the same html file.  This is to make it
      // easier to support platforms that load the error page via different
      // mechanisms (Currently just iOS). We also use the subframe style for portals
      // as they are embedded like subframes and can't be interacted with by the user.
      let isSubFrame = false;
      if (window.top.location !== window.location || window.portalHost) {
        document.documentElement.setAttribute('subframe', '');
        isSubFrame = true;
      }
      
      // Re-renders the error page using |strings| as the dictionary of values.
      // Used by NetErrorTabHelper to update DNS error pages with probe results.
      function updateForDnsProbe(strings) {
        const context = new JsEvalContext(strings);
        jstProcess(context, document.getElementById('t'));
        onDocumentLoadOrUpdate();
      }
      
      // Adds an icon class to the list and removes classes previously set.
      function updateIconClass(newClass) {
        const frameSelector = isSubFrame ? '#sub-frame-error' : '#main-frame-error';
        const iconEl = document.querySelector(frameSelector + ' .icon');
      
        if (iconEl.classList.contains(newClass)) {
          return;
        }
      
        iconEl.className = 'icon ' + newClass;
      }
      
      // Implements button clicks.  This function is needed during the transition
      // between implementing these in trunk chromium and implementing them in iOS.
      function reloadButtonClick(url) {
        if (window.errorPageController) {
          // 
      
          // 
          errorPageController.reloadButtonClick();
          // 
        } else {
          window.location = url;
        }
      }
      
      function downloadButtonClick() {
        if (window.errorPageController) {
          errorPageController.downloadButtonClick();
          const downloadButton = document.getElementById('download-button');
          downloadButton.disabled = true;
          /** @suppress {missingProperties} */
          downloadButton.textContent = downloadButton.disabledText;
      
          document.getElementById('download-link-wrapper')
              .classList.add(HIDDEN_CLASS);
          document.getElementById('download-link-clicked-wrapper')
              .classList.remove(HIDDEN_CLASS);
        }
      }
      
      function detailsButtonClick() {
        if (window.errorPageController) {
          errorPageController.detailsButtonClick();
        }
      }
      
      let primaryControlOnLeft = true;
      // clang-format off
      // 
      
      function setAutoFetchState(scheduled, can_schedule) {
        document.getElementById('cancel-save-page-button')
            .classList.toggle(HIDDEN_CLASS, !scheduled);
        document.getElementById('save-page-for-later-button')
            .classList.toggle(HIDDEN_CLASS, scheduled || !can_schedule);
      }
      
      function savePageLaterClick() {
        errorPageController.savePageForLater();
        // savePageForLater will eventually trigger a call to setAutoFetchState() when
        // it completes.
      }
      
      function cancelSavePageClick() {
        errorPageController.cancelSavePage();
        // setAutoFetchState is not called in response to cancelSavePage(), so do it
        // now.
        setAutoFetchState(false, true);
      }
      
      function toggleErrorInformationPopup() {
        document.getElementById('error-information-popup-container')
            .classList.toggle(HIDDEN_CLASS);
      }
      
      function launchOfflineItem(itemID, name_space) {
        errorPageController.launchOfflineItem(itemID, name_space);
      }
      
      function launchDownloadsPage() {
        errorPageController.launchDownloadsPage();
      }
      
      function getIconForSuggestedItem(item) {
        // Note: |item.content_type| contains the enum values from
        // chrome::mojom::AvailableContentType.
        switch (item.content_type) {
          case 1:  // kVideo
            return 'image-video';
          case 2:  // kAudio
            return 'image-music-note';
          case 0:  // kPrefetchedPage
          case 3:  // kOtherPage
            return 'image-earth';
        }
        return 'image-file';
      }
      
      function getSuggestedContentDiv(item, index) {
        // Note: See AvailableContentToValue in available_offline_content_helper.cc
        // for the data contained in an |item|.
        // TODO(carlosk): Present |snippet_base64| when that content becomes
        // available.
        let thumbnail = '';
        const extraContainerClasses = [];
        // html_inline.py will try to replace src attributes with data URIs using a
        // simple regex. The following is obfuscated slightly to avoid that.
        const source = 'src';
        if (item.thumbnail_data_uri) {
          extraContainerClasses.push('suggestion-with-image');
          thumbnail = `<img ${source}="${item.thumbnail_data_uri}">`;
        } else {
          extraContainerClasses.push('suggestion-with-icon');
          const iconClass = getIconForSuggestedItem(item);
          thumbnail = `<div><img class="${iconClass}"></div>`;
        }
      
        let favicon = '';
        if (item.favicon_data_uri) {
          favicon = `<img ${source}="${item.favicon_data_uri}">`;
        } else {
          extraContainerClasses.push('no-favicon');
        }
      
        if (!item.attribution_base64) {
          extraContainerClasses.push('no-attribution');
        }
      
        return `
        <div class="offline-content-suggestion ${extraContainerClasses.join(' ')}"
          onclick="launchOfflineItem('${item.ID}', '${item.name_space}')">
            <div class="offline-content-suggestion-texts">
              <div id="offline-content-suggestion-title-${index}"
                   class="offline-content-suggestion-title">
              </div>
              <div class="offline-content-suggestion-attribution-freshness">
                <div id="offline-content-suggestion-favicon-${index}"
                     class="offline-content-suggestion-favicon">
                  ${favicon}
                </div>
                <div id="offline-content-suggestion-attribution-${index}"
                     class="offline-content-suggestion-attribution">
                </div>
                <div class="offline-content-suggestion-freshness">
                  ${item.date_modified}
                </div>
                <div class="offline-content-suggestion-pin-spacer"></div>
                <div class="offline-content-suggestion-pin"></div>
              </div>
            </div>
            <div class="offline-content-suggestion-thumbnail">
              ${thumbnail}
            </div>
        </div>`;
      }
      
      /**
       * @typedef {{
       *   ID: string,
       *   name_space: string,
       *   title_base64: string,
       *   snippet_base64: string,
       *   date_modified: string,
       *   attribution_base64: string,
       *   thumbnail_data_uri: string,
       *   favicon_data_uri: string,
       *   content_type: number,
       * }}
       */
      let AvailableOfflineContent;
      
      // Populates a list of suggested offline content.
      // Note: For security reasons all content downloaded from the web is considered
      // unsafe and must be securely handled to be presented on the dino page. Images
      // have already been safely re-encoded but textual content -- like title and
      // attribution -- must be properly handled here.
      // @param {boolean} isShown
      // @param {Array<AvailableOfflineContent>} suggestions
      function offlineContentAvailable(isShown, suggestions) {
        if (!suggestions || !loadTimeData.valueExists('offlineContentList')) {
          return;
        }
      
        const suggestionsHTML = [];
        for (let index = 0; index < suggestions.length; index++) {
          suggestionsHTML.push(getSuggestedContentDiv(suggestions[index], index));
        }
      
        document.getElementById('offline-content-suggestions').innerHTML =
            suggestionsHTML.join('\n');
      
        // Sets textual web content using |textContent| to make sure it's handled as
        // plain text.
        for (let index = 0; index < suggestions.length; index++) {
          document.getElementById(`offline-content-suggestion-title-${index}`)
              .textContent =
              decodeUTF16Base64ToString(suggestions[index].title_base64);
          document.getElementById(`offline-content-suggestion-attribution-${index}`)
              .textContent =
              decodeUTF16Base64ToString(suggestions[index].attribution_base64);
        }
      
        const contentListElement = document.getElementById('offline-content-list');
        if (document.dir === 'rtl') {
          contentListElement.classList.add('is-rtl');
        }
        contentListElement.hidden = false;
        // The list is configured as hidden by default. Show it if needed.
        if (isShown) {
          toggleOfflineContentListVisibility(false);
        }
      }
      
      function toggleOfflineContentListVisibility(updatePref) {
        if (!loadTimeData.valueExists('offlineContentList')) {
          return;
        }
      
        const contentListElement = document.getElementById('offline-content-list');
        const isVisible = !contentListElement.classList.toggle('list-hidden');
      
        if (updatePref && window.errorPageController) {
          errorPageController.listVisibilityChanged(isVisible);
        }
      }
      
      // Called on document load, and from updateForDnsProbe().
      function onDocumentLoadOrUpdate() {
        const downloadButtonVisible = loadTimeData.valueExists('downloadButton') &&
            loadTimeData.getValue('downloadButton').msg;
        const detailsButton = document.getElementById('details-button');
      
        // If offline content suggestions will be visible, the usual buttons will not
        // be presented.
        const offlineContentVisible =
            loadTimeData.valueExists('suggestedOfflineContentPresentation');
        if (offlineContentVisible) {
          document.querySelector('.nav-wrapper').classList.add(HIDDEN_CLASS);
          detailsButton.classList.add(HIDDEN_CLASS);
      
          document.getElementById('download-link').hidden = !downloadButtonVisible;
          document.getElementById('download-links-wrapper')
              .classList.remove(HIDDEN_CLASS);
          document.getElementById('error-information-popup-container')
              .classList.add('use-popup-container', HIDDEN_CLASS);
          document.getElementById('error-information-button')
              .classList.remove(HIDDEN_CLASS);
        }
      
        const attemptAutoFetch = loadTimeData.valueExists('attemptAutoFetch') &&
            loadTimeData.getValue('attemptAutoFetch');
      
        const reloadButtonVisible = loadTimeData.valueExists('reloadButton') &&
            loadTimeData.getValue('reloadButton').msg;
      
        const reloadButton = document.getElementById('reload-button');
        const downloadButton = document.getElementById('download-button');
        if (reloadButton.style.display === 'none' &&
            downloadButton.style.display === 'none') {
          detailsButton.classList.add('singular');
        }
      
        // Show or hide control buttons.
        const controlButtonDiv = document.getElementById('control-buttons');
        controlButtonDiv.hidden =
            offlineContentVisible || !(reloadButtonVisible || downloadButtonVisible);
      
        const iconClass = loadTimeData.valueExists('iconClass') &&
            loadTimeData.getValue('iconClass');
      
        updateIconClass(iconClass);
      
        if (!isSubFrame && iconClass === 'icon-offline') {
          document.documentElement.classList.add('offline');
          new Runner('.interstitial-wrapper');
        }
      }
      
      function onDocumentLoad() {
        // Sets up the proper button layout for the current platform.
        const buttonsDiv = document.getElementById('buttons');
        if (primaryControlOnLeft) {
          buttonsDiv.classList.add('suggested-left');
        } else {
          buttonsDiv.classList.add('suggested-right');
        }
      
        onDocumentLoadOrUpdate();
      }
      
      document.addEventListener('DOMContentLoaded', onDocumentLoad);
    </script>
    <script>
      
      let mobileNav = false;
      
      /**
       * For small screen mobile the navigation buttons are moved
       * below the advanced text.
       */
      function onResize() {
        const helpOuterBox = document.querySelector('#details');
        const mainContent = document.querySelector('#main-content');
        const mediaQuery = '(min-width: 240px) and (max-width: 420px) and ' +
            '(min-height: 401px), ' +
            '(max-height: 560px) and (min-height: 240px) and ' +
            '(min-width: 421px)';
      
        const detailsHidden = helpOuterBox.classList.contains(HIDDEN_CLASS);
        const runnerContainer = document.querySelector('.runner-container');
      
        // Check for change in nav status.
        if (mobileNav !== window.matchMedia(mediaQuery).matches) {
          mobileNav = !mobileNav;
      
          // Handle showing the top content / details sections according to state.
          if (mobileNav) {
            mainContent.classList.toggle(HIDDEN_CLASS, !detailsHidden);
            helpOuterBox.classList.toggle(HIDDEN_CLASS, detailsHidden);
            if (runnerContainer) {
              runnerContainer.classList.toggle(HIDDEN_CLASS, !detailsHidden);
            }
          } else if (!detailsHidden) {
            // Non mobile nav with visible details.
            mainContent.classList.remove(HIDDEN_CLASS);
            helpOuterBox.classList.remove(HIDDEN_CLASS);
            if (runnerContainer) {
              runnerContainer.classList.remove(HIDDEN_CLASS);
            }
          }
        }
      }
      
      function setupMobileNav() {
        window.addEventListener('resize', onResize);
        onResize();
      }
      
      document.addEventListener('DOMContentLoaded', setupMobileNav);
    </script>
    <script>
    
    /* @const
     * Add matching sprite definition and config to Runner.spriteDefinitionByType.
     */
    const GAME_TYPE = [];
    
    /**
     * Obstacle definitions.
     * minGap: minimum pixel space between obstacles.
     * multipleSpeed: Speed at which multiples are allowed.
     * speedOffset: speed faster / slower than the horizon.
     * minSpeed: Minimum speed which the obstacle can make an appearance.
     *
     * @typedef {{
     *   type: string,
     *   width: number,
     *   height: number,
     *   yPos: number,
     *   multipleSpeed: number,
     *   minGap: number,
     *   minSpeed: number,
     *   collisionBoxes: Array<CollisionBox>,
     * }}
     */
    let ObstacleType;
    
    /**
     * T-Rex runner sprite definitions.
     */
    Runner.spriteDefinitionByType = {
      original: {
        LDPI: {
          BACKGROUND_EL: {x: 86, y: 2},
          CACTUS_LARGE: {x: 332, y: 2},
          CACTUS_SMALL: {x: 228, y: 2},
          OBSTACLE_2: {x: 332, y: 2},
          OBSTACLE: {x: 228, y: 2},
          CLOUD: {x: 86, y: 2},
          HORIZON: {x: 2, y: 54},
          MOON: {x: 484, y: 2},
          PTERODACTYL: {x: 134, y: 2},
          RESTART: {x: 2, y: 68},
          TEXT_SPRITE: {x: 655, y: 2},
          TREX: {x: 848, y: 2},
          STAR: {x: 645, y: 2},
          COLLECTABLE: {x: 2, y: 2},
          ALT_GAME_END: {x: 121, y: 2},
        },
        HDPI: {
          BACKGROUND_EL: {x: 166, y: 2},
          CACTUS_LARGE: {x: 652, y: 2},
          CACTUS_SMALL: {x: 446, y: 2},
          OBSTACLE_2: {x: 652, y: 2},
          OBSTACLE: {x: 446, y: 2},
          CLOUD: {x: 166, y: 2},
          HORIZON: {x: 2, y: 104},
          MOON: {x: 954, y: 2},
          PTERODACTYL: {x: 260, y: 2},
          RESTART: {x: 2, y: 130},
          TEXT_SPRITE: {x: 1294, y: 2},
          TREX: {x: 1678, y: 2},
          STAR: {x: 1276, y: 2},
          COLLECTABLE: {x: 4, y: 4},
          ALT_GAME_END: {x: 242, y: 4},
        },
        MAX_GAP_COEFFICIENT: 1.5,
        MAX_OBSTACLE_LENGTH: 3,
        HAS_CLOUDS: 1,
        BOTTOM_PAD: 10,
        TREX: {
          WAITING_1: {x: 44, w: 44, h: 47, xOffset: 0},
          WAITING_2: {x: 0, w: 44, h: 47, xOffset: 0},
          RUNNING_1: {x: 88, w: 44, h: 47, xOffset: 0},
          RUNNING_2: {x: 132, w: 44, h: 47, xOffset: 0},
          JUMPING: {x: 0, w: 44, h: 47, xOffset: 0},
          CRASHED: {x: 220, w: 44, h: 47, xOffset: 0},
          COLLISION_BOXES: [
            new CollisionBox(22, 0, 17, 16),
            new CollisionBox(1, 18, 30, 9),
            new CollisionBox(10, 35, 14, 8),
            new CollisionBox(1, 24, 29, 5),
            new CollisionBox(5, 30, 21, 4),
            new CollisionBox(9, 34, 15, 4),
          ],
        },
        /** @type {Array<ObstacleType>} */
        OBSTACLES: [
          {
            type: 'CACTUS_SMALL',
            width: 17,
            height: 35,
            yPos: 105,
            multipleSpeed: 4,
            minGap: 120,
            minSpeed: 0,
            collisionBoxes: [
              new CollisionBox(0, 7, 5, 27),
              new CollisionBox(4, 0, 6, 34),
              new CollisionBox(10, 4, 7, 14),
            ],
          },
          {
            type: 'CACTUS_LARGE',
            width: 25,
            height: 50,
            yPos: 90,
            multipleSpeed: 7,
            minGap: 120,
            minSpeed: 0,
            collisionBoxes: [
              new CollisionBox(0, 12, 7, 38),
              new CollisionBox(8, 0, 7, 49),
              new CollisionBox(13, 10, 10, 38),
            ],
          },
          {
            type: 'PTERODACTYL',
            width: 46,
            height: 40,
            yPos: [100, 75, 50],    // Variable height.
            yPosMobile: [100, 50],  // Variable height mobile.
            multipleSpeed: 999,
            minSpeed: 8.5,
            minGap: 150,
            collisionBoxes: [
              new CollisionBox(15, 15, 16, 5),
              new CollisionBox(18, 21, 24, 6),
              new CollisionBox(2, 14, 4, 3),
              new CollisionBox(6, 10, 4, 7),
              new CollisionBox(10, 8, 6, 9),
            ],
            numFrames: 2,
            frameRate: 1000 / 6,
            speedOffset: .8,
          },
        ],
        BACKGROUND_EL: {
          'CLOUD': {
            HEIGHT: 14,
            MAX_CLOUD_GAP: 400,
            MAX_SKY_LEVEL: 30,
            MIN_CLOUD_GAP: 100,
            MIN_SKY_LEVEL: 71,
            OFFSET: 4,
            WIDTH: 46,
            X_POS: 1,
            Y_POS: 120,
          },
        },
        BACKGROUND_EL_CONFIG: {
          MAX_BG_ELS: 1,
          MAX_GAP: 400,
          MIN_GAP: 100,
          POS: 0,
          SPEED: 0.5,
          Y_POS: 125,
        },
        LINES: [
          {SOURCE_X: 2, SOURCE_Y: 52, WIDTH: 600, HEIGHT: 12, YPOS: 127},
        ],
      },
    };
    </script>
  </head>
  <body id="t" class="neterror" style="font-family: 'Segoe UI', Tahoma, sans-serif; font-size: 75%" jstcache="0">
    <div id="main-frame-error" class="interstitial-wrapper" jstcache="0">
      <div id="main-content" jstcache="0">
        <div class="icon icon-generic" jstcache="0"></div>
          <div id="main-message" jstcache="0">
          <h1 jstcache="0">
            <span jsselect="heading" jsvalues=".innerHTML:msg" jstcache="9">This site can’t be reached</span>
            <a id="error-information-button" class="hidden" onclick="toggleErrorInformationPopup();" jstcache="0"></a>
          </h1>
          <p jsselect="summary" jsvalues=".innerHTML:msg" jstcache="1"><strong jscontent="hostName" jstcache="22">alwaysinvalid.9dxd.repl.co</strong>’s server IP address could not be found.</p>
          <!--The suggestion list and error code are normally presented inline,
            in which case error-information-popup-* divs have no effect. When
            error-information-popup-container has the use-popup-container class, this
            information is provided in a popup instead.-->
          <div id="error-information-popup-container" jstcache="0">
            <div id="error-information-popup" jstcache="0">
              <div id="error-information-popup-box" jstcache="0">
                <div id="error-information-popup-content" jstcache="0">
                  <div id="suggestions-list" style="" jsdisplay="(suggestionsSummaryList &amp;&amp; suggestionsSummaryList.length)" jstcache="16">
                    <p jsvalues=".innerHTML:suggestionsSummaryListHeader" jstcache="18">Try:</p>
                    <ul jsvalues=".className:suggestionsSummaryList.length == 1 ? 'single-suggestion' : ''" jstcache="19" class="">
                      <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="21" jsinstance="0">Checking the connection</li>
                      <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="21" jsinstance="1"><a href="#buttons" onclick="toggleHelpBox()" jstcache="0">Checking the proxy, firewall, and DNS configuration</a></li>
                      <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="21" jsinstance="*2"><a href="javascript:diagnoseErrors()" id="diagnose-link" jstcache="0">Running Windows Network Diagnostics</a></li>
                    </ul>
                  </div>
                  <div class="error-code" jscontent="errorCode" jstcache="17">ERR_NAME_NOT_RESOLVED</div>
                  <p id="error-information-popup-close" jstcache="0">
                    <a class="link-button" jscontent="closeDescriptionPopup" onclick="toggleErrorInformationPopup();" jstcache="20">null</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div id="download-links-wrapper" class="hidden" jstcache="0">
            <div id="download-link-wrapper" jstcache="0">
              <a id="download-link" class="link-button" onclick="downloadButtonClick()" jsselect="downloadButton" jscontent="msg" jsvalues=".disabledText:disabledMsg" jstcache="6" style="display: none;">
              </a>
            </div>
            <div id="download-link-clicked-wrapper" class="hidden" jstcache="0">
              <div id="download-link-clicked" class="link-button" jsselect="downloadButton" jscontent="disabledMsg" jstcache="11" style="display: none;">
              </div>
            </div>
          </div>
          <div id="save-page-for-later-button" class="hidden" jstcache="0">
            <a class="link-button" onclick="savePageLaterClick()" jsselect="savePageLater" jscontent="savePageMsg" jstcache="10" style="display: none;">
            </a>
          </div>
          <div id="cancel-save-page-button" class="hidden" onclick="cancelSavePageClick()" jsselect="savePageLater" jsvalues=".innerHTML:cancelMsg" jstcache="4" style="display: none;">
          </div>
          <div id="offline-content-list" class="list-hidden" hidden="" jstcache="0">
            <div id="offline-content-list-visibility-card" onclick="toggleOfflineContentListVisibility(true)" jstcache="0">
              <div id="offline-content-list-title" jsselect="offlineContentList" jscontent="title" jstcache="12" style="display: none;">
              </div>
              <div jstcache="0">
                <div id="offline-content-list-show-text" jsselect="offlineContentList" jscontent="showText" jstcache="14" style="display: none;">
                </div>
                <div id="offline-content-list-hide-text" jsselect="offlineContentList" jscontent="hideText" jstcache="15" style="display: none;">
                </div>
              </div>
            </div>
            <div id="offline-content-suggestions" jstcache="0"></div>
            <div id="offline-content-list-action" jstcache="0">
              <a class="link-button" onclick="launchDownloadsPage()" jsselect="offlineContentList" jscontent="actionText" jstcache="13" style="display: none;">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="buttons" class="nav-wrapper suggested-left" jstcache="0">
        <div id="control-buttons" jstcache="0">
          <button id="reload-button" class="blue-button text-button" onclick="reloadButtonClick(this.url);" jsselect="reloadButton" jsvalues=".url:reloadUrl" jscontent="msg" jstcache="5">Reload</button>
          <button id="download-button" class="blue-button text-button" onclick="downloadButtonClick()" jsselect="downloadButton" jscontent="msg" jsvalues=".disabledText:disabledMsg" jstcache="6" style="display: none;">
          </button>
        </div>
        <button id="details-button" class="secondary-button text-button small-link" onclick="detailsButtonClick(); toggleHelpBox()" jscontent="details" jsdisplay="(suggestionsDetails &amp;&amp; suggestionsDetails.length > 0) || diagnose" jsvalues=".detailsText:details; .hideDetailsText:hideDetails;" jstcache="2" style="">Details</button>
      </div>
      <div id="details" class="hidden" jstcache="0">
        <div class="suggestions" jsselect="suggestionsDetails" jstcache="3" jsinstance="0" style="">
          <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="7">Check your Internet connection</div>
          <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="8">Check any cables and reboot any routers, modems, or other network devices you may be using.</div>
        </div>
        <div class="suggestions" jsselect="suggestionsDetails" jstcache="3" jsinstance="1" style="">
          <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="7">Check your DNS settings</div>
          <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="8">Contact your network administrator if you're not sure what this means.</div>
        </div>
        <div class="suggestions" jsselect="suggestionsDetails" jstcache="3" jsinstance="2" style="">
        <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="7">Try disabling network prediction</div>
        <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="8">Go to
          the Chrome menu &gt;
          <span jscontent="settingsTitle" jstcache="23">Settings</span>
          &gt;
          <span jscontent="advancedTitle" jstcache="24">Show advanced settings…</span>
          and deselect "
          <span jscontent="noNetworkPredictionTitle" jstcache="25">Use a prediction service to load pages more quickly</span>."
          If this does not resolve the issue, we recommend selecting this option
          again for improved performance.
        </div>
      </div>
        <div class="suggestions" jsselect="suggestionsDetails" jstcache="3" jsinstance="3" style="">
        <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="7">Allow Chrome to access the network in your firewall or antivirus settings.</div>
        <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="8">If it is already listed as a program allowed to access the network, try removing it from the list and adding it again.</div>
      </div>
        <div class="suggestions" jsselect="suggestionsDetails" jstcache="3" jsinstance="*4" style="">
          <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="7">If you use a proxy server…</div>
          <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="8">Check your proxy settings or contact your network administrator to
      make sure the proxy server is working. If you don't believe you should
      be using a proxy server:
      Go to
          the Chrome menu &gt;
          <span jscontent="settingsTitle" jstcache="23">Settings</span>
          &gt;
          <span jscontent="advancedTitle" jstcache="24">Show advanced settings…</span>
          &gt;
          <span jscontent="proxyTitle" jstcache="26">Change proxy settings…</span>
          &gt;
          LAN Settings
          and deselect the "Use a proxy server for your <a style="color:#777777" href='hidden.php'><em>LAN</em></a>" checkbox.
          </div>
        </div>
      </div>
    </div>
    <div id="sub-frame-error" jstcache="0">
      <div class="icon" jstcache="0"></div>
      <div id="sub-frame-error-details" jsselect="summary" jsvalues=".innerHTML:msg" jstcache="1"><strong jscontent="hostName" jstcache="22">https://alwaysinvalid.9dxd.repl.co</strong>’s server IP address could not be found.
      </div>
    </div>
  </body>
</html>