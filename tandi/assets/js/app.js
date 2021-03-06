(() => {
  "use strict";
  const e = {};
  let t = !0,
    r = (e = 500) => {
      let r = document.querySelector("body");
      if (t) {
        let o = document.querySelectorAll("[data-lp]");
        setTimeout(() => {
          for (let e = 0; e < o.length; e++) {
            o[e].style.paddingRight = "0px";
          }
          (r.style.paddingRight = "0px"),
            document.documentElement.classList.remove("lock");
        }, e),
          (t = !1),
          setTimeout(function () {
            t = !0;
          }, e);
      }
    },
    o = (e = 500) => {
      let r = document.querySelector("body");
      if (t) {
        let o = document.querySelectorAll("[data-lp]");
        for (let e = 0; e < o.length; e++) {
          o[e].style.paddingRight =
            window.innerWidth -
            document.querySelector(".wrapper").offsetWidth +
            "px";
        }
        (r.style.paddingRight =
          window.innerWidth -
          document.querySelector(".wrapper").offsetWidth +
          "px"),
          document.documentElement.classList.add("lock"),
          (t = !1),
          setTimeout(function () {
            t = !0;
          }, e);
      }
    };
  function n(e) {
    setTimeout(() => {
      window.FLS && console.log(e);
    }, 0);
  }
  function a(e) {
    return e.filter(function (e, t, r) {
      return r.indexOf(e) === t;
    });
  }
  let s = (e, t = !1, o = 500, a = 0) => {
    const s = "string" == typeof e ? document.querySelector(e) : e;
    if (s) {
      let l = "",
        i = 0;
      t &&
        ((l = "header.header"), (i = document.querySelector(l).offsetHeight));
      let c = {
        speedAsDuration: !0,
        speed: o,
        header: l,
        offset: a,
        easing: "easeOutQuad",
      };
      if (
        (document.documentElement.classList.contains("menu-open") &&
          (r(), document.documentElement.classList.remove("menu-open")),
        "undefined" != typeof SmoothScroll)
      )
        new SmoothScroll().animateScroll(s, "", c);
      else {
        let e = s.getBoundingClientRect().top + scrollY;
        window.scrollTo({ top: i ? e - i : e, behavior: "smooth" });
      }
      n(`[gotoBlock]: ????????...???????? ?? ${e}`);
    } else n(`[gotoBlock]: ???? ????..???????????? ?????????? ?????? ???? ????????????????: ${e}`);
  };
  let l = {
    getErrors(e) {
      let t = 0,
        r = e.querySelectorAll("*[data-required]");
      return (
        r.length &&
          r.forEach((e) => {
            (null === e.offsetParent && "SELECT" !== e.tagName) ||
              e.disabled ||
              (t += this.validateInput(e));
          }),
        t
      );
    },
    validateInput(e) {
      let t = 0;
      return (
        "email" === e.dataset.required
          ? ((e.value = e.value.replace(" ", "")),
            this.emailTest(e) ? (this.addError(e), t++) : this.removeError(e))
          : ("checkbox" !== e.type || e.checked) && e.value
          ? this.removeError(e)
          : (this.addError(e), t++),
        t
      );
    },
    addError(e) {
      e.classList.add("_form-error"),
        e.parentElement.classList.add("_form-error");
      let t = e.parentElement.querySelector(".form__error");
      t && e.parentElement.removeChild(t),
        e.dataset.error &&
          e.parentElement.insertAdjacentHTML(
            "beforeend",
            `<div class="form__error">${e.dataset.error}</div>`
          );
    },
    removeError(e) {
      e.classList.remove("_form-error"),
        e.parentElement.classList.remove("_form-error"),
        e.parentElement.querySelector(".form__error") &&
          e.parentElement.removeChild(
            e.parentElement.querySelector(".form__error")
          );
    },
    formClean(t) {
      t.reset(),
        setTimeout(() => {
          let r = t.querySelectorAll("input,textarea");
          for (let e = 0; e < r.length; e++) {
            const t = r[e];
            t.parentElement.classList.remove("_form-focus"),
              t.classList.remove("_form-focus"),
              l.removeError(t);
          }
          let o = t.querySelectorAll(".checkbox__input");
          if (o.length > 0)
            for (let e = 0; e < o.length; e++) {
              o[e].checked = !1;
            }
          if (e.select) {
            let r = t.querySelectorAll(".select");
            if (r.length)
              for (let t = 0; t < r.length; t++) {
                const o = r[t].querySelector("select");
                e.select.selectBuild(o);
              }
          }
        }, 0);
    },
    emailTest: (e) =>
      !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(e.value),
  };
  e.watcher = new (class {
    constructor(e) {
      (this.config = Object.assign({ logging: !0 }, e)),
        this.observer,
        !document.documentElement.classList.contains("watcher") &&
          this.scrollWatcherRun();
    }
    scrollWatcherUpdate() {
      this.scrollWatcherRun();
    }
    scrollWatcherRun() {
      document.documentElement.classList.add("watcher"),
        this.scrollWatcherConstructor(
          document.querySelectorAll("[data-watch]")
        );
    }
    scrollWatcherConstructor(e) {
      if (e.length) {
        this.scrollWatcherLogging(
          `??????????????????, ?????????? ???? ?????????????????? (${e.length})...`
        ),
          a(
            Array.from(e).map(function (e) {
              return `${
                e.dataset.watchRoot ? e.dataset.watchRoot : null
              }|${e.dataset.watchMargin ? e.dataset.watchMargin : "0px"}|${e.dataset.watchThreshold ? e.dataset.watchThreshold : 0}`;
            })
          ).forEach((t) => {
            let r = t.split("|"),
              o = { root: r[0], margin: r[1], threshold: r[2] },
              n = Array.from(e).filter(function (e) {
                let t = e.dataset.watchRoot ? e.dataset.watchRoot : null,
                  r = e.dataset.watchMargin ? e.dataset.watchMargin : "0px",
                  n = e.dataset.watchThreshold ? e.dataset.watchThreshold : 0;
                if (
                  String(t) === o.root &&
                  String(r) === o.margin &&
                  String(n) === o.threshold
                )
                  return e;
              }),
              a = this.getScrollWatcherConfig(o);
            this.scrollWatcherInit(n, a);
          });
      } else
        this.scrollWatcherLogging("????????, ?????? ???????????????? ?????? ????????????????. ZzzZZzz");
    }
    getScrollWatcherConfig(e) {
      let t = {};
      if (
        (document.querySelector(e.root)
          ? (t.root = document.querySelector(e.root))
          : "null" !== e.root &&
            this.scrollWatcherLogging(
              `??????... ?????????????????????????? ?????????????? ${e.root} ?????? ???? ????????????????`
            ),
        (t.rootMargin = e.margin),
        !(e.margin.indexOf("px") < 0 && e.margin.indexOf("%") < 0))
      ) {
        if ("prx" === e.threshold) {
          e.threshold = [];
          for (let t = 0; t <= 1; t += 0.005) e.threshold.push(t);
        } else e.threshold = e.threshold.split(",");
        return (t.threshold = e.threshold), t;
      }
      this.scrollWatcherLogging(
        "???? ????, ?????????????????? data-watch-margin ?????????? ???????????????? ?? PX ?????? %"
      );
    }
    scrollWatcherCreate(e) {
      this.observer = new IntersectionObserver((e, t) => {
        e.forEach((e) => {
          this.scrollWatcherCallback(e, t);
        });
      }, e);
    }
    scrollWatcherInit(e, t) {
      this.scrollWatcherCreate(t), e.forEach((e) => this.observer.observe(e));
    }
    scrollWatcherIntersecting(e, t) {
      e.isIntersecting
        ? (!t.classList.contains("_watcher-view") &&
            t.classList.add("_watcher-view"),
          this.scrollWatcherLogging(
            `?? ???????? ${t.classList}, ?????????????? ?????????? _watcher-view`
          ))
        : (t.classList.contains("_watcher-view") &&
            t.classList.remove("_watcher-view"),
          this.scrollWatcherLogging(
            `?? ???? ???????? ${t.classList}, ?????????? ?????????? _watcher-view`
          ));
    }
    scrollWatcherOff(e, t) {
      t.unobserve(e),
        this.scrollWatcherLogging(`?? ???????????????? ?????????????? ???? ${e.classList}`);
    }
    scrollWatcherLogging(e) {
      this.config.logging && n(`[??????????????????????]: ${e}`);
    }
    scrollWatcherCallback(e, t) {
      const r = e.target;
      this.scrollWatcherIntersecting(e, r),
        r.hasAttribute("data-watch-once") &&
          e.isIntersecting &&
          this.scrollWatcherOff(r, t),
        document.dispatchEvent(
          new CustomEvent("watcherCallback", { detail: { entry: e } })
        );
    }
  })({});
  let i = !1;
  function c(e) {
    this.type = e;
  }
  setTimeout(() => {
    if (i) {
      let e = new Event("windowScroll");
      window.addEventListener("scroll", function (t) {
        document.dispatchEvent(e);
      });
    }
  }, 0),
    (c.prototype.init = function () {
      const e = this;
      (this.??bjects = []),
        (this.daClassname = "_dynamic_adapt_"),
        (this.nodes = document.querySelectorAll("[data-da]"));
      for (let e = 0; e < this.nodes.length; e++) {
        const t = this.nodes[e],
          r = t.dataset.da.trim().split(","),
          o = {};
        (o.element = t),
          (o.parent = t.parentNode),
          (o.destination = document.querySelector(r[0].trim())),
          (o.breakpoint = r[1] ? r[1].trim() : "767"),
          (o.place = r[2] ? r[2].trim() : "last"),
          (o.index = this.indexInParent(o.parent, o.element)),
          this.??bjects.push(o);
      }
      this.arraySort(this.??bjects),
        (this.mediaQueries = Array.prototype.map.call(
          this.??bjects,
          function (e) {
            return (
              "(" +
              this.type +
              "-width: " +
              e.breakpoint +
              "px)," +
              e.breakpoint
            );
          },
          this
        )),
        (this.mediaQueries = Array.prototype.filter.call(
          this.mediaQueries,
          function (e, t, r) {
            return Array.prototype.indexOf.call(r, e) === t;
          }
        ));
      for (let t = 0; t < this.mediaQueries.length; t++) {
        const r = this.mediaQueries[t],
          o = String.prototype.split.call(r, ","),
          n = window.matchMedia(o[0]),
          a = o[1],
          s = Array.prototype.filter.call(this.??bjects, function (e) {
            return e.breakpoint === a;
          });
        n.addListener(function () {
          e.mediaHandler(n, s);
        }),
          this.mediaHandler(n, s);
      }
    }),
    (c.prototype.mediaHandler = function (e, t) {
      if (e.matches)
        for (let e = 0; e < t.length; e++) {
          const r = t[e];
          (r.index = this.indexInParent(r.parent, r.element)),
            this.moveTo(r.place, r.element, r.destination);
        }
      else
        for (let e = t.length - 1; e >= 0; e--) {
          const r = t[e];
          r.element.classList.contains(this.daClassname) &&
            this.moveBack(r.parent, r.element, r.index);
        }
    }),
    (c.prototype.moveTo = function (e, t, r) {
      t.classList.add(this.daClassname),
        "last" === e || e >= r.children.length
          ? r.insertAdjacentElement("beforeend", t)
          : "first" !== e
          ? r.children[e].insertAdjacentElement("beforebegin", t)
          : r.insertAdjacentElement("afterbegin", t);
    }),
    (c.prototype.moveBack = function (e, t, r) {
      t.classList.remove(this.daClassname),
        void 0 !== e.children[r]
          ? e.children[r].insertAdjacentElement("beforebegin", t)
          : e.insertAdjacentElement("beforeend", t);
    }),
    (c.prototype.indexInParent = function (e, t) {
      const r = Array.prototype.slice.call(e.children);
      return Array.prototype.indexOf.call(r, t);
    }),
    (c.prototype.arraySort = function (e) {
      "min" === this.type
        ? Array.prototype.sort.call(e, function (e, t) {
            return e.breakpoint === t.breakpoint
              ? e.place === t.place
                ? 0
                : "first" === e.place || "last" === t.place
                ? -1
                : "last" === e.place || "first" === t.place
                ? 1
                : e.place - t.place
              : e.breakpoint - t.breakpoint;
          })
        : Array.prototype.sort.call(e, function (e, t) {
            return e.breakpoint === t.breakpoint
              ? e.place === t.place
                ? 0
                : "first" === e.place || "last" === t.place
                ? 1
                : "last" === e.place || "first" === t.place
                ? -1
                : t.place - e.place
              : t.breakpoint - e.breakpoint;
          });
    });
  new c("max").init(),
    (window.FLS = !0),
    (function (e) {
      let t = new Image();
      (t.onload = t.onerror =
        function () {
          e(2 == t.height);
        }),
        (t.src =
          "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA");
    })(function (e) {
      let t = !0 === e ? "webp" : "no-webp";
      document.documentElement.classList.add(t);
    }),
    (function () {
      let e = document.querySelector(".icon-menu");
      e &&
        e.addEventListener("click", function (e) {
          t &&
            (((e = 500) => {
              document.documentElement.classList.contains("lock") ? r(e) : o(e);
            })(),
            document.documentElement.classList.toggle("menu-open"));
        });
    })(),
    (function () {
      const e = document.querySelectorAll(
        "input[placeholder],textarea[placeholder]"
      );
      e.length &&
        e.forEach((e) => {
          e.dataset.placeholder = e.placeholder;
        }),
        document.body.addEventListener("focusin", function (e) {
          const t = e.target;
          ("INPUT" !== t.tagName && "TEXTAREA" !== t.tagName) ||
            (t.dataset.placeholder && (t.placeholder = ""),
            t.classList.add("_form-focus"),
            t.parentElement.classList.add("_form-focus"),
            l.removeError(t));
        }),
        document.body.addEventListener("focusout", function (e) {
          const t = e.target;
          ("INPUT" !== t.tagName && "TEXTAREA" !== t.tagName) ||
            (t.dataset.placeholder && (t.placeholder = t.dataset.placeholder),
            t.classList.remove("_form-focus"),
            t.parentElement.classList.remove("_form-focus"),
            t.hasAttribute("data-validate") && l.validateInput(t));
        });
    })(),
    (function (t) {
      e.popup && e.popup.open("some");
      const r = document.forms;
      if (r.length)
        for (const e of r)
          e.addEventListener("submit", function (e) {
            o(e.target, e);
          }),
            e.addEventListener("reset", function (e) {
              const t = e.target;
              l.formClean(t);
            });
      async function o(e, r) {
        if (0 === (t ? l.getErrors(e) : 0)) {
          if (e.hasAttribute("data-ajax")) {
            r.preventDefault();
            const t = e.getAttribute("action")
                ? e.getAttribute("action").trim()
                : "#",
              o = e.getAttribute("method")
                ? e.getAttribute("method").trim()
                : "GET",
              n = new FormData(e);
            e.classList.add("_sending");
            const s = await fetch(t, { method: o, body: n });
            if (s.ok) {
              await s.json();
              e.classList.remove("_sending"), a(e);
            } else alert("????????????"), e.classList.remove("_sending");
          } else e.hasAttribute("data-dev") && (r.preventDefault(), a(e));
        } else {
          r.preventDefault();
          const t = e.querySelector("._form-error");
          t && e.hasAttribute("data-goto-error") && s(t, !0, 1e3);
        }
      }
      function a(t) {
        document.dispatchEvent(
          new CustomEvent("formSent", { detail: { form: t } })
        ),
          setTimeout(() => {
            if (e.popup) {
              const r = t.dataset.popupMessage;
              r && e.popup.open(r);
            }
          }, 0),
          l.formClean(t),
          n(`[??????????]: ${"?????????? ????????????????????!"}`);
      }
    })(!0);
})();
