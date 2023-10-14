import tensorflow as tf

# Create a TensorFlow constant
hello = tf.constant("Hello, TensorFlow!")

# Start a TensorFlow session
with tf.Session() as session:
    # Run the TensorFlow operation and print the result
    result = session.run(hello)
    print(result.decode())
