<button>

  <p>Dashboard</p>

  @component('card', { name: 'bob' })

  <p>test</p>

  @endcomponent

  <h1>
    test
    <h1>
      test
      <h1>test</h1>
    </h1>
  </h1>

  <h1>
    test
    <h1>
      test
      <h1>test</h1>
    </h1>
  </h1>

  <script>
    export default function () {
      return {
        state: {
          ...config,
        },
        onMounted(props, state) {},
      };
    }
  </script>

  <style scoped>
    .colored {
      color: dodgerblue !important;
    }
  </style>

</button>
