(function ($) {
  $(document).on('ready', function () {
    $('.js-overall-income-chart').each(function (i, el) {
      var chart = new Chart(el, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: 'Total Students',
            borderColor: '#6CE071',
            backgroundColor: 'rgba(0,0,0,0)',
            data: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]
          }, {
            label: 'Total Attendances',
            borderColor: '#FA5D4E',
            backgroundColor: 'rgba(0,0,0,0)',
            data: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]
          },]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            },
            line: {
              borderWidth: 1
            }
          },
          scales: {
            xAxes: [{
              gridLines: {
                borderDash: [8, 8],
                color: '#eaf2f9'
              },
              ticks: {
                fontFamily: 'Open Sans',
                fontColor: '#6e7f94'
              }
            }],
            yAxes: [{
              gridLines: {
                borderDash: [8, 8],
                color: '#eaf2f9'
              },
              ticks: {
                fontFamily: 'Open Sans',
                fontColor: '#6e7f94'
              }
            }]
          },
          tooltips: {
            enabled: false,
            intersect: 0,
            custom: function (tooltipModel) {
              // Tooltip Element
              var tooltipEl = document.getElementById('overallIncomeChartTooltip' + i);

              // Create element on first render
              if (!tooltipEl) {
                tooltipEl = document.createElement('div');
                tooltipEl.id = 'overallIncomeChartTooltip' + i;
                tooltipEl.className = 'u-chart-tooltip';
                tooltipEl.innerHTML = '<div class="u-tooltip-body"></div>';
                document.body.appendChild(tooltipEl);
              }

              // Hide if no tooltip
              if (tooltipModel.opacity === 0) {
                tooltipEl.style.opacity = 0;
                return;
              }

              // Set caret Position
              tooltipEl.classList.remove('above', 'below', 'no-transform');
              if (tooltipModel.yAlign) {
                tooltipEl.classList.add(tooltipModel.yAlign);
              } else {
                tooltipEl.classList.add('no-transform');
              }

              function getBody(bodyItem) {
                return bodyItem.lines;
              }

              // Set Text
              if (tooltipModel.body) {
                var titleLines = tooltipModel.title || [],
                  bodyLines = tooltipModel.body.map(getBody),
                  innerHtml = '<h4 class="u-chart-tooltip__title">';

                titleLines.forEach(function (title) {
                  innerHtml += title;
                });

                innerHtml += '</h4>';

                bodyLines.forEach(function (body, i) {
                  var colors = tooltipModel.labelColors[i];
                  innerHtml += '<div class="u-chart-tooltip__value">' + body + '</div>';
                });

                var tableRoot = tooltipEl.querySelector('.u-tooltip-body');
                tableRoot.innerHTML = innerHtml;
              }

              // `this` will be the overall tooltip
              var $self = this,
                position = $self._chart.canvas.getBoundingClientRect(),
                tooltipWidth = $(tooltipEl).outerWidth(),
                tooltipHeight = $(tooltipEl).outerHeight();

              // Display, position, and set styles for font
              tooltipEl.style.opacity = 1;
              tooltipEl.style.left = (position.left + tooltipModel.caretX - tooltipWidth / 2) + 'px';
              tooltipEl.style.top = (position.top + tooltipModel.caretY - tooltipHeight - 15) + 'px';

              $(window).on('scroll', function() {
                var position = $self._chart.canvas.getBoundingClientRect(),
                  tooltipWidth = $(tooltipEl).outerWidth(),
                  tooltipHeight = $(tooltipEl).outerHeight();

                // Display, position, and set styles for font
                tooltipEl.style.left = (position.left + tooltipModel.caretX - tooltipWidth / 2) + 'px';
                tooltipEl.style.top = (position.top + tooltipModel.caretY - tooltipHeight - 15) + 'px';
              });
            }
          }
        }
      });
    });

    $('.js-doughnut-chart').each(function (i, el) {
      var data = JSON.parse(el.getAttribute('data-set')),
        colors = JSON.parse(el.getAttribute('data-colors'));

      var chart = new Chart(el, {
        type: 'doughnut',
        data: {
          datasets: [{
            backgroundColor: colors,
            data: data
          }]
        },
        options: {
          legend: {
            display: false
          },
          tooltips: {
            enabled: false
          },
          cutoutPercentage: 87
        }
      });
    });
  });
})(jQuery);