# Model

Model consists of the entities, value objects, aggregates.



# CQRS
CQRS stands for Command Query Responsibility Segregation. It's a pattern described by Greg Young.
At its heart is the notion that you can use a different model to update information than the model you use for reading
information. For some situations, this separation can be valuable, but beware that for most systems CQRS adds
risky complexity.
