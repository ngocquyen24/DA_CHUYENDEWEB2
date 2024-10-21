// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function (mod) {
  if (typeof exports == "object" && typeof module == "object") // CommonJS
    mod(require("../../lib/codemirror"), require("../yaml/yaml"))
  else if (typeof define == "function" && define.amd) // AMD
    define(["../../lib/codemirror", "../yaml/yaml"], mod)
  else // Plain browser env
    mod(CodeMirror)
})(function (CodeMirror) {

  var START = 0, FRONTMATTER = 1, BODY = 2

  // a mixed mode for Markdown text with an optional YAML front matter
  CodeMirror.defineMode("yaml-frontmatter", function (config, parserConfig) {
    var yamlMode = CodeMirror.getMode(config, "yaml")
    var innerMode = CodeMirror.getMode(config, parserConfig && parserConfig.base || "gfm")

<<<<<<< HEAD
<<<<<<< HEAD
    function curMode(state) {
      return state.state == BODY ? innerMode : yamlMode
=======
    function localMode(state) {
      return state.state == FRONTMATTER ? {mode: yamlMode, state: state.yaml} : {mode: innerMode, state: state.inner}
>>>>>>> danhmuc_list
=======
    function localMode(state) {
      return state.state == FRONTMATTER ? {mode: yamlMode, state: state.yaml} : {mode: innerMode, state: state.inner}
>>>>>>> danhmuc_list
    }

    return {
      startState: function () {
        return {
          state: START,
<<<<<<< HEAD
<<<<<<< HEAD
          inner: CodeMirror.startState(yamlMode)
=======
          yaml: null,
          inner: CodeMirror.startState(innerMode)
>>>>>>> danhmuc_list
=======
          yaml: null,
          inner: CodeMirror.startState(innerMode)
>>>>>>> danhmuc_list
        }
      },
      copyState: function (state) {
        return {
          state: state.state,
<<<<<<< HEAD
<<<<<<< HEAD
          inner: CodeMirror.copyState(curMode(state), state.inner)
=======
          yaml: state.yaml && CodeMirror.copyState(yamlMode, state.yaml),
          inner: CodeMirror.copyState(innerMode, state.inner)
>>>>>>> danhmuc_list
=======
          yaml: state.yaml && CodeMirror.copyState(yamlMode, state.yaml),
          inner: CodeMirror.copyState(innerMode, state.inner)
>>>>>>> danhmuc_list
        }
      },
      token: function (stream, state) {
        if (state.state == START) {
          if (stream.match('---', false)) {
            state.state = FRONTMATTER
<<<<<<< HEAD
<<<<<<< HEAD
            return yamlMode.token(stream, state.inner)
          } else {
            state.state = BODY
            state.inner = CodeMirror.startState(innerMode)
=======
=======
>>>>>>> danhmuc_list
            state.yaml = CodeMirror.startState(yamlMode)
            return yamlMode.token(stream, state.yaml)
          } else {
            state.state = BODY
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
            return innerMode.token(stream, state.inner)
          }
        } else if (state.state == FRONTMATTER) {
          var end = stream.sol() && stream.match(/(---|\.\.\.)/, false)
<<<<<<< HEAD
<<<<<<< HEAD
          var style = yamlMode.token(stream, state.inner)
          if (end) {
            state.state = BODY
            state.inner = CodeMirror.startState(innerMode)
=======
=======
>>>>>>> danhmuc_list
          var style = yamlMode.token(stream, state.yaml)
          if (end) {
            state.state = BODY
            state.yaml = null
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
          }
          return style
        } else {
          return innerMode.token(stream, state.inner)
        }
      },
<<<<<<< HEAD
<<<<<<< HEAD
      innerMode: function (state) {
        return {mode: curMode(state), state: state.inner}
      },
      blankLine: function (state) {
        var mode = curMode(state)
        if (mode.blankLine) return mode.blankLine(state.inner)
=======
=======
>>>>>>> danhmuc_list
      innerMode: localMode,
      indent: function(state, a, b) {
        var m = localMode(state)
        return m.mode.indent ? m.mode.indent(m.state, a, b) : CodeMirror.Pass
      },
      blankLine: function (state) {
        var m = localMode(state)
        if (m.mode.blankLine) return m.mode.blankLine(m.state)
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
      }
    }
  })
});
